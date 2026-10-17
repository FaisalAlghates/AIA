<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\TeamMember;

class DashboardController extends Controller
{
    /** The admin home: counts of what the public site shows, with shortcuts to manage it. */
    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'activeServices' => Service::where('is_active', true)->count(),
            'team' => TeamMember::count(),
            'plans' => PricingPlan::count(),
            'posts' => BlogPost::count(),
        ];

        return view('admin.dashboard', [
            'stats' => $stats,
            'latestServices' => Service::orderByDesc('updated_at')->take(5)->get(),
            'latestMembers' => TeamMember::orderByDesc('updated_at')->take(5)->get(),
        ]);
    }
}
