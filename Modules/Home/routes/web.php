<?php

use Illuminate\Support\Facades\Route;
use Modules\Home\Http\Controllers\HomeController;

Route::name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});
