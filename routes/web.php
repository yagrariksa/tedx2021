<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EssayController as AdminEssay;
use App\Http\Controllers\Admin\SpeakerController as AdminSpeaker;
use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\Client\EssayController as CE;
use App\Http\Controllers\Client\SpeakerController as DS;
use App\Http\Controllers\MainEventController;
use App\Http\Middleware\AdminMiddleware;
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
        Route::prefix('/essay')->group(function () {
            Route::get('/', [CE::class, 'dashboard'])->name('account.essay.dashboard');
            Route::post('/', [CE::class, 'register'])->name('account.essay.register');
            Route::put('/', [CE::class, 'paid'])->name('account.essay.payment');
        });
        Route::prefix('/speaker')->group(function () {
            Route::get('/', [DS::class, 'dashboard'])->name('account.speaker.dashboard');
            Route::post('/', [DS::class, 'register'])->name('account.speaker.register');
        });
    });
});
Route::get('/about', function () {
    return view('mainboard');
})->name('mainboard');
Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');
Route::get('/stream', function () {
    return view('stream');
})->middleware('auth')->name('stream');
Route::get('/essay', [CE::class, 'branding'])->name('essay.branding');
Route::get('/speaker', [DS::class, 'branding'])->name('speaker.branding');

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
        Route::prefix('/speaker')->group(function () {
            Route::get('/', [AdminSpeaker::class, 'home'])->name('admin.speaker.home');
            Route::get('/participant', [AdminSpeaker::class, 'participant'])->name('admin.speaker.participant');
            Route::post('/participant', [AdminSpeaker::class, 'loloskan'])->name('admin.speaker.participant');
            Route::put('/participant', [AdminSpeaker::class, 'gagalkan'])->name('admin.speaker.participant');
        });
        Route::prefix('/main')->group(function () {
            Route::get('/statistic', [MainEventController::class, 'statistic'])->name('admin.main.statistic');
            Route::get('/participant', [MainEventController::class, 'participant'])->name('admin.main.participant');
            Route::get('/excel', [MainEventController::class, 'excel'])->name('admin.main.excel');
        });
    });
});
