<?php

use Illuminate\Support\Facades\Route;
use Modules\Legal\Http\Controllers\LegalController;

Route::get('/legal', [LegalController::class, 'index'])->name('legal.index');
