<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/login', function () {
    return view('Login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);

