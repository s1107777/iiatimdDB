<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
<<<<<<< HEAD
    // Route::post('/refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::get('/user-profile', [App\Http\Controllers\AuthController::class, 'userProfile']);  
    Route::post('/change-profile', [App\Http\Controllers\AuthController::class, 'changeProfile']);  
=======
    Route::post('/refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::get('/user-profile', [App\Http\Controllers\AuthController::class, 'userProfile']);  
    Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'movies']);  
>>>>>>> fb5e65db62feb3db348114d16b87a0937b943780
});
