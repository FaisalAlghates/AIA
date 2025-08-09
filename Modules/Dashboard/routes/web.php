<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\DashboardController;

Route::middleware(['auth', 'verified'])->name('dashboard.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
});
