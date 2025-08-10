<?php

use Illuminate\Support\Facades\Route;
use Modules\FAQ\Http\Controllers\FAQController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('faqs', FAQController::class)->names('faq');
});
