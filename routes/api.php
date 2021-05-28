<?php

use App\Modules\Customer\Presentation\Controllers\CustomerController;
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

Route::get('/customer/list', [CustomerController::class, 'list']);
Route::post('/customer/add', [CustomerController::class, 'add']);
Route::post('/customer/edit', [CustomerController::class, 'edit']);
Route::post('/customer/delete', [CustomerController::class, 'delete']);
