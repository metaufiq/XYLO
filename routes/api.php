<?php

use App\Modules\Agent\Presentation\Controllers\AgentController;
use App\Modules\Auth\Presentation\Controllers\AuthController;
use App\Modules\Customer\Presentation\Controllers\CustomerController;
use App\Modules\Customer\Presentation\Controllers\FollowUpStatusController;
use App\Modules\History\Application\Services\FollowUpHistory\FollowUpHistoryService;
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

Route::prefix('customer')->group(function () {
    Route::get('/list', [CustomerController::class, 'list']);
    Route::post('/add', [CustomerController::class, 'add']);
    Route::post('/edit', [CustomerController::class, 'edit']);
    Route::post('/delete', [CustomerController::class, 'delete']);
    Route::prefix('status')->group(function () {
        Route::get('/list', [FollowUpStatusController::class, 'list']);
    });
});

Route::prefix('history')->group(function () {
    Route::get('/list', [FollowUpHistoryService::class, 'list']);
    Route::post('/add', [FollowUpHistoryService::class, 'add']);
});

Route::prefix('agent')->group(function () {
    Route::get('/list', [AgentController::class, 'list']);
});

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});
