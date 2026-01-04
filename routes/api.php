<?php

use App\Http\Controllers\AddTransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\TransactionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [LoginController::class, 'login']);
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/fee-today', [PendapatanController::class, 'getTodayIncome']);
Route::post('/transactions', [AddTransactionController::class, 'store']);