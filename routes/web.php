<?php

use App\Http\Controllers\Admin\EssayController as AE;
use App\Http\Controllers\Client\EssayController as CE;
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
    });
    Route::get('/login', function () {
        return view('admin.login');
    });
    Route::prefix('/essay')->group(function () {
        Route::get('/', [AE::class, 'home'])->name('admin.essay.home');
        Route::post('/', [AE::class, 'changepaid']);
    });
});
