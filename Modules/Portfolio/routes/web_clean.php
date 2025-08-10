<?php

use Illuminate\Support\Facades\Route;
use Modules\Portfolio\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
