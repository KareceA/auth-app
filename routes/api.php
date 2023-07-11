<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
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

//create route to register, login, logout, route for only authenticated users
//this is to indicate that laravel sanctum authentication will be provided
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('/welcome', [WelcomeController::class, 'welcome']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/login', [LoginController::class, 'login']);

Route::get('welcome', function(){
    return response('hello', 201);
});
