<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AddTransactionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [LoginController::class, 'login']);
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/fee-today', [PendapatanController::class, 'getTodayIncome']);

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::post('/transactions', [AddTransactionController::class, 'store']);
Route::put('/transactions/{id}', [AddTransactionController::class, 'update']);
Route::delete('/transactions/{id}', [AddTransactionController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [LogoutController::class, 'logout']);
});