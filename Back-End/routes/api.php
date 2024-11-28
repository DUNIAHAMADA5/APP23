<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/User/registerUser', [AuthController::class, 'register']);
Route::post('/User/loginUser', [AuthController::class, 'login']);
Route::post('/User/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
