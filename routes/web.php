<?php
use App\Http\Controllers\LogLikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\UserLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logs', [LogsController::class, 'index'])->name('logs');
Route::post('/logs', [LogsController::class, 'store']);
Route::delete('/logs/{log}', [LogsController::class, 'destroy'])->name('logs.destroy');

Route::post('/logs/{log}/likes', [LogLikeController::class, 'store'])->name('logs.likes');
Route::delete('/logs/{log}/likes', [LogLikeController::class, 'destroy'])->name('logs.likes');

Route::get('/users/{user:username}/logs', [UserLogController::class, 'index'])->name('users.logs');
