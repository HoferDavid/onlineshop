<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


Route::get('/signup', [SignupController::class, 'create']);


Route::get('/login', [LoginController::class, 'create']);
