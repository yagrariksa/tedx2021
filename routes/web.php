<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EssayController as AE;
use App\Http\Controllers\Client\EssayController as CE;
use App\Http\Middleware\AdminMiddleware;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::prefix('essay')->group(function () {
    Route::get('/', [CE::class, 'branding'])->name('essay.branding');
    Route::get('/register', [CE::class, 'form'])->name('essay.form');
    Route::post('/register', [CE::class, 'register'])->name('essay.form');
    Route::get('/payment', [CE::class, 'payment'])->name('essay.payment');
    Route::post('/payment', [CE::class, 'paid'])->name('essay.payment');
    Route::get('/thanks', [CE::class, 'thanks'])->name('essay.thanks');
    Route::get('/status', [CE::class, 'status'])->name('essay.status');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->middleware(AdminMiddleware::class)->name('admin.home');
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('admin.login');
    Route::middleware(AdminMiddleware::class)->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::prefix('/essay')->group(function () {
            Route::get('/', [AE::class, 'home'])->name('admin.essay.home');
            Route::get('/payment', [AE::class, 'payment'])->name('admin.essay.payment');
            Route::post('/payment', [AE::class, 'changepaid']);
            Route::get('/finalist', [AE::class, 'finalist'])->name('admin.essay.finalist');
        });
    });
});
