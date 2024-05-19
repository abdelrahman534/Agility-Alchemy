<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;

// Registration routes
Route::post('/register', [RegisterController::class, 'store'])->name('user-store');
Route::get('/register', [RegisterController::class, 'create'])->name('user-create');

//Login routes
Route::get('/login', [AuthController::class, 'signIn'])->name('signIn');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/home', [AuthController::class, 'home'])->name('home');

// Additional routes
Route::get('/index', [RegisterController::class, 'index'])->name('index');
