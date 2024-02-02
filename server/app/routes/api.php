<?php

use App\Http\Controllers\TestController;
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
Route::group([ 'prefix' => '/users'], function ($router) {
    Route::post('/',[\App\Http\Controllers\UserController::class,'create'])->name('create.users');
    Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('create.login');

});
