<?php

use Illuminate\Support\Facades\Route;
use Modules\About\Http\Controllers\AboutController;

Route::name('about.')->group(function () {
    Route::get('/about', [AboutController::class, 'index'])->name('index');
});
