<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EssayController as AdminEssay;
use App\Http\Controllers\Client\AccountController;
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
Route::prefix('account')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AccountController::class, 'login'])->name('account.login');
        Route::get('/login/{any}', function () {
            return redirect()->route('account.login');
        });
        Route::post('/login', [AccountController::class, 'post'])->name('account.login');
        Route::post('/login/setup', [AccountController::class, 'postsetup'])->name('account.login.setup');
        Route::get('/regist', [AccountController::class, 'regist'])->name('account.regist');
        Route::post('/regist', [AccountController::class, 'postregist'])->name('account.regist');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/', [AccountController::class, 'dashboard'])->name('account.dashboard');
        Route::get('/logout', [AccountController::class, 'logout'])->name('account.logout');
        Route::prefix('/essay')->group(function(){
            Route::get('/', [CE::class, 'dashboard'])->name('account.essay.dashboard');
        });
    });
});
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
            Route::get('/', [AdminEssay::class, 'home'])->name('admin.essay.home');
            Route::get('/payment', [AdminEssay::class, 'payment'])->name('admin.essay.payment');
            Route::post('/payment', [AdminEssay::class, 'changepaid']);
            Route::get('/finalist', [AdminEssay::class, 'finalist'])->name('admin.essay.finalist');
        });
    });
});
