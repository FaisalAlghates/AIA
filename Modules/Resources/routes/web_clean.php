<?php

use Illuminate\Support\Facades\Route;
use Modules\Resources\Http\Controllers\ResourcesController;

Route::get('/resources', [ResourcesController::class, 'index'])->name('resources.index');
