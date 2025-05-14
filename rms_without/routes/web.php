<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login-attempt', [LoginController::class, 'loginAttempt'])->name('login_attempt');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-attempt', [LoginController::class, 'registerAttempt'])->name('register_attempt');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

