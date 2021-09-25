<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\Dashboard;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|X
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/logout', 'App\Http\Controllers\UserController@logout');


Route::middleware(['auth:sanctum'])->group(function () {  
    Route::post('/dashboard', Dashboard::class);    
    //Route::get('profession', [ProfessionController::class, 'index'])->name('api.professions.index');
    Route::get('profession', [ProfessionController::class, 'index'])->name('api.professions.index');
});

