<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\CorridasController;

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
Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(CorridasController::class)->group(function () {
        Route::get('/corrida/cancelar/{id}', 'destroy');
        Route::post('/corrida/criar', 'store');
    });
});

Route::controller(CorridasController::class)->group(function () {
    //Route::get('/corrida/cancelar/{id}', 'show');
    //Route::post('/corrida/criar', 'store');
});