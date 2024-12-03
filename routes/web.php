<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::get('/register', [AuthController::class,'create'])->name('register');
Route::get('/logout', [AuthController::class,'create'])->name('logout');
Route::get('/dashboard', [AdminController::class,'index'])->name('dasboard');

