<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::get('/register', [AuthController::class,'create'])->name('register');