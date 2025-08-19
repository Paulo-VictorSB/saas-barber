<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckUserIsLogged;
use App\Http\Middleware\CheckUserIsNotLogged;
use Illuminate\Support\Facades\Route;

Route::middleware([CheckUserIsLogged::class])->group(function (){
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');
});

Route::middleware([CheckUserIsNotLogged::class])->group(function (){
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginSubmit', [LoginController::class, 'loginSubmit'])->name('loginSubmit');
});
