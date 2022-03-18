<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfesionController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\SkillController;


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
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->middleware('auth','pbh');
Route::post('/profile/update/', [ProfileController::class, 'update'])->middleware('auth','pbh');
Route::post('/profile/change-password', [ProfileController::class, 'change_password'] )->middleware('auth','pbh');

Route::get('/profesion/{id}',[ProfesionController::class, 'index'])->middleware('auth','pbh');
Route::post('/profesion/store',[ProfesionController::class, 'store'])->middleware('auth','pbh'); 
Route::get('/profesion/edit/{id}',[ProfesionController::class, 'edit'])->middleware('auth','pbh');
Route::post('/profesion/update',[ProfesionController::class, 'update'])->middleware('auth','pbh');
Route::get('/profesion/delete/{id}',[ProfesionController::class, 'destroy'])->middleware('auth','pbh');

Route::get('/education', [EducationController::class, 'index'])->middleware('auth','pbh');
Route::post('/education', [EducationController::class, 'store']);
Route::get('/education/edit/{id}', [EducationController::class, 'edit']);
Route::post('/education/update', [EducationController::class, 'update']);
Route::get('/education/delete/{id}', [EducationController::class, 'destroy']);

Route::get('/experience', [ExpController::class, 'index']);
Route::post('/experience', [ExpController::class, 'store']);
Route::get('/experience/edit/{id}', [ExpController::class, 'edit']);
Route::post('/experience/update', [ExpController::class, 'update']);
Route::get('/experience/delete/{id}', [ExpController::class, 'delete']);

Route::get('/award', [AwardController::class, 'index']);
Route::post('/award', [AwardController::class, 'store']);
Route::get('/award/edit/{id}', [AwardController::class, 'edit']);
Route::post('/award/update', [AwardController::class, 'update']);
Route::get('/award/delete/{id}', [AwardController::class, 'delete']);

Route::get('/skill', [SkillController::class, 'index']);
Route::post('/skill', [SkillController::class, 'store']);
Route::get('/skill/edit/{id}', [SkillController::class, 'edit']);
Route::post('/skill/update', [SkillController::class, 'update']);
Route::get('/skill/delete/{id}', [SkillController::class, 'delete']);
