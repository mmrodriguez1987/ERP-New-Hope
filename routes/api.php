<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Dashboard;

Route::post('/login',  [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout',  [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {  
    Route::post('/dashboard', Dashboard::class);    
    //Route::get('profession', [ProfessionController::class, 'index'])->name('api.professions.index');
    Route::get('profession', [ProfessionController::class, 'index'])->name('api.professions.index');
});

