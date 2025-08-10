<?php

use Illuminate\Support\Facades\Route;
use Modules\Team\Http\Controllers\TeamController;

Route::get('/team', [TeamController::class, 'index'])->name('team.index');
