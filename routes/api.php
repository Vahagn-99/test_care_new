<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
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

Route::get('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::prefix('v1')->group(function () {
    Route::apiResource('car', \App\Http\Controllers\Api\V1\UseCarController::class);
    Route::post('car/add_car_for_user/{carId}', [\App\Http\Controllers\Api\V1\DispatcherController::class, 'rentCar'])->name('dispatcher.rentCar');
    Route::post('car/add_user', [\App\Http\Controllers\Api\V1\DispatcherController::class, 'addUser'])->name('dispatcher.addUser');
    Route::get('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});
