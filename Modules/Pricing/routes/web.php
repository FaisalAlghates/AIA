<?php

use Illuminate\Support\Facades\Route;
use Modules\Pricing\Http\Controllers\PricingController;

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
