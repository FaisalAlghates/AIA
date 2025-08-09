<?php

use Illuminate\Support\Facades\Route;
use Modules\Contact\Http\Controllers\ContactController;

Route::name('contact.')->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('index');
});
