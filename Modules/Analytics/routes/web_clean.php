<?php

use Illuminate\Support\Facades\Route;
use Modules\Analytics\Http\Controllers\AnalyticsController;

Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
