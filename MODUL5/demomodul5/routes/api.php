<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/fruits', App\Http\Controllers\Api\FruitsController::class);
Route::apiResource('/customers', App\Http\Controllers\Api\CustomersController::class);
