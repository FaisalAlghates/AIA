<?php

use Illuminate\Support\Facades\Route;
use Modules\FAQ\Http\Controllers\FAQController;

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');
