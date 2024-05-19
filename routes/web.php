<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;

// Registration routes
Route::get('/register', [RegisterController::class, 'register'])->name('register');

// Authentication routes
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/home', [AuthController::class, 'home'])->name('home');

// Additional routes
Route::get('/index', [RegisterController::class, 'index'])->name('index');
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('signIn');
?>