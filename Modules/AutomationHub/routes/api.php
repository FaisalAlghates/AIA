<?php

use Illuminate\Support\Facades\Route;
use Modules\AutomationHub\Http\Controllers\AutomationHubController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('automationhubs', AutomationHubController::class)->names('automationhub');
});
