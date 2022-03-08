<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfesionController;


Route::get('/', function () {
    return view('auth.login');
})->middleware('not_auth');

Route::get('/register',[AuthController::class, 'register'])->middleware('not_auth');
Route::post('/register',[AuthController::class, 'store_user'])->middleware('not_auth');

Route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('not_auth');
Route::post('/login',[AuthController::class, 'authenticate'])->middleware('not_auth');
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');


Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware('auth','pbh');

Route::get('/my/profile/{id}', [ProfileController::class, 'my_profile'])->middleware('auth','pbh');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit']);
Route::post('/profile/update/', [ProfileController::class, 'update']);
Route::post('/profile/change-password', [ProfileController::class, 'change_password'] );

Route::get('/profesion',[ProfesionController::class, 'index']);
