<?php

use Orion\Facades\Orion;
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


Route::group([ 'prefix' => '/users'], function () {


    Route::post('/register',[\App\Http\Controllers\UserController::class,'register']);
    Route::get('/createAdmin',[\App\Http\Controllers\UserController::class,'crete_Admin']);
    Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('create.login');
});

Route::group(['as'=>'api.'],function (){
    Orion::resource('users',\App\Http\Controllers\UserController::class);
});


