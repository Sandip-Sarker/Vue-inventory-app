<?php

use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\DashboardController;


Route::get('/', [HomeController::class, 'index']);


Route::post('/user-registration', [UserController::class, 'registration'])->name('user.registration');
Route::get('/login', [UserController::class, 'loginPage'])->name('user.login.page');
Route::post('/user-login', [UserController::class, 'login'])->name('user.login');
Route::post('/send-otp', [UserController::class, 'sendOtp'])->name('send.otp');
Route::post('/verify-otp', [UserController::class, 'verifyOtp'])->name('verify.otp');

Route::middleware(TokenVerificationMiddleware::class)->group(function () {

    Route::get('/user-logout', [UserController::class, 'logout'])->name('user.logout');
    Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('reset.password');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});
