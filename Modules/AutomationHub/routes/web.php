<?php

use Illuminate\Support\Facades\Route;
use Modules\AutomationHub\Http\Controllers\AutomationHubController;

Route::name('automationhub.')->group(function () {
    Route::get('/automation-hub', [AutomationHubController::class, 'index'])->name('index');
    
    // API routes for dynamic functionality
    Route::prefix('api/automation-hub')->group(function () {
        Route::get('/templates', [AutomationHubController::class, 'getTemplates'])->name('api.templates');
        Route::get('/templates/{id}', [AutomationHubController::class, 'getTemplate'])->name('api.template');
        Route::post('/templates/{id}/use', [AutomationHubController::class, 'useTemplate'])->name('api.use');
        Route::post('/templates/{id}/download', [AutomationHubController::class, 'downloadTemplate'])->name('api.download');
        Route::post('/templates/{id}/favorite', [AutomationHubController::class, 'toggleFavorite'])->name('api.favorite');
        Route::get('/categories', [AutomationHubController::class, 'getCategories'])->name('api.categories');
        Route::post('/templates', [AutomationHubController::class, 'createTemplate'])->name('api.create');
    });
});
