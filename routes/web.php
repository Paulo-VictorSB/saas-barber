<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'login'])->name('login');

// Login
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('loginSubmit');
