<?php

use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\DashboardController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);


Route::post('/user-registration', [UserController::class, 'registration'])->name('user.registration');
Route::post('/user-login', [UserController::class, 'login'])->name('user.login');

Route::middleware(TokenVerificationMiddleware::class)->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});
