<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\DivisionController;
use App\Http\Controllers\api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('divisions', [DivisionController::class, 'index']);
    Route::resource('employees', EmployeeController::class);
});
