<?php

use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/users')->group(function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/check-exist', [UserController::class, 'checkExistUser']);

    Route::get('/index', [UserController::class, 'index']);
    Route::get('/show/{id}', [UserController::class, 'showById']);
    Route::get('/show-current', [UserController::class, 'showCurrent'])->middleware('auth:sanctum');

    Route::put('/update/{id}', [UserController::class, 'update'])->middleware('auth:sanctum');

    Route::delete('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->middleware('auth:sanctum');
});

Route::prefix('/otp')->group(function () {
    Route::post('/store', [OtpController::class, 'store']);
    Route::post('/check', [OtpController::class, 'check']);

    Route::put('/reset-password', [OtpController::class, 'resetPassword']);

    Route::get('/index', [OtpController::class, 'index']);
    Route::get('/show-current', [OtpController::class, 'showCurrent']);
    Route::get('show-by-email/{email}', [OtpController::class, 'showByEmail']);
});

Route::prefix('/daily-activity')->group(function () {
    Route::post('/store', [DailyActivityController::class, 'store'])->middleware('auth:sanctum');

    Route::get('/index', [DailyActivityController::class, 'index']);
    Route::get('/show/{id}', [DailyActivityController::class, 'showById']);
    Route::get('/show-current', [DailyActivityController::class, 'showCurrent'])->middleware('auth:sanctum');
    Route::get('/show-total-nutrition', [DailyActivityController::class, 'showTotalNutrition'])->middleware('auth:sanctum');
    Route::get('/show-history-total-nutrition', [DailyActivityController::class, 'showHistoryTotalNutrition'])->middleware('auth:sanctum');

    Route::put('/update/{id}', [DailyActivityController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/delete/{id}', [DailyActivityController::class, 'delete'])->middleware('auth:sanctum');
});
