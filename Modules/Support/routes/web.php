<?php

use Illuminate\Support\Facades\Route;
use Modules\Support\Http\Controllers\SupportController;

Route::get('/support', [SupportController::class, 'index'])->name('support.index');
