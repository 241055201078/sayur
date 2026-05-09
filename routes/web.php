<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
