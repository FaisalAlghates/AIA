<?php

use Illuminate\Support\Facades\Route;
use Modules\Solutions\Http\Controllers\SolutionsController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('solutions', SolutionsController::class)->names('solutions');
});
