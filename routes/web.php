<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('auth.register');
});

Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'store_user']);

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'authenticate']);

Route::get('/logout',[AuthController::class, 'logout']);


Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware('auth','pbh');
