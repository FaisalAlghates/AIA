<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use Modules\Home\Http\Controllers\HomeController;
use Modules\Solutions\Http\Controllers\SolutionsController;
use Modules\Services\Http\Controllers\ServicesController;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Documentation\Http\Controllers\DocumentationController;
use Modules\Support\Http\Controllers\SupportController;
use Modules\Legal\Http\Controllers\LegalController;
use Modules\Pricing\Http\Controllers\PricingController;
use Modules\FAQ\Http\Controllers\FAQController;
use Modules\Resources\Http\Controllers\ResourcesController;
use Modules\Team\Http\Controllers\TeamController;
use Modules\Portfolio\Http\Controllers\PortfolioController;
use Modules\Analytics\Http\Controllers\AnalyticsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Admin\TeamMembersController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('services', AdminServicesController::class);
    Route::resource('team-members', TeamMembersController::class);
});

// Core Routes
Route::get('/solutions', [SolutionsController::class, 'index'])->name('solutions.index');

// Services Routes
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');

// Company Routes
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Resources Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/documentation', [DocumentationController::class, 'index'])->name('documentation.index');
Route::get('/resources', [ResourcesController::class, 'index'])->name('resources.index');
Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');

// Other Routes
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');

// Support Routes
Route::get('/support', [SupportController::class, 'index'])->name('support.index');
Route::get('/legal', [LegalController::class, 'index'])->name('legal.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
