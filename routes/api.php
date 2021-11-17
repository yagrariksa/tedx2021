<?php

use App\Http\Controllers\Api\GeneralController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/admin/main/graph', [GeneralController::class, 'graph'])->name('api.main.graph');
Route::get('/account/info', [GeneralController::class, 'infouser'])->name('api.account.info');

Route::get('/account/info', [GeneralController::class, 'infouser'])->name('api.account.info');
Route::get('/account/check', [GeneralController::class, 'checkaccount'])->name('api.account.check');

Route::get('/essay/status', [GeneralController::class, 'a'])->name('api.essay.status.payment');
Route::get('/essay/payment', [GeneralController::class, 'c'])->name('api.essay.payment');
Route::get('/essay/graph', [GeneralController::class, 'd'])->name('api.essay.graph');