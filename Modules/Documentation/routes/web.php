<?php

use Illuminate\Support\Facades\Route;
use Modules\Documentation\Http\Controllers\DocumentationController;

Route::get('/documentation', [DocumentationController::class, 'index'])->name('documentation.index');
