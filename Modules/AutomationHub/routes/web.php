<?php

use Illuminate\Support\Facades\Route;
use Modules\AutomationHub\Http\Controllers\AutomationHubController;

Route::name('automationhub.')->group(function () {
    Route::get('/automation-hub', [AutomationHubController::class, 'index'])->name('index');
});
