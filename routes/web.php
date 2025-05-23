<?php

use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\DashboardController;


Route::get('/', [HomeController::class, 'index']);

// User Controller
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login');
    Route::post('/user-login', 'login')->name('user.login');
    Route::get('/registration', 'registrationPage')->name('registration');
    Route::post('/user-registration', 'registration')->name('user.registration');
    Route::get('/Otp', 'otpPage')->name('otp');
    Route::post('/send-otp','sendOtp')->name('send.otp');
});


Route::middleware(TokenVerificationMiddleware::class)->group(function () {

    // User Controller
    Route::controller(UserController::class)->group(function () {
        Route::get('/Otp-verify', 'otpVerifyPage')->name('verify.otp.page');
        Route::post('/verify-otp',  'verifyOtp')->name('verify.otp');
        Route::get('/reset-password',  'resetPasswordPage')->name('reset.page');
        Route::post('/reset-password', 'resetPassword')->name('reset.password');
        Route::get('/user-logout', 'logout')->name('user.logout');
    });


    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});
