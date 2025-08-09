@extends('core::layouts.app')

@section('title', 'Dashboard - AIA Platform')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
    <!-- Dashboard Header -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Welcome back, {{ auth()->user()->name }}!</h1>
                    <p class="text-gray-600 mt-2">Manage your automation workflows and monitor performance</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        Create New Automation
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @php
                $stats = [
                    [
                        'title' => 'Active Automations',
                        'value' => '24',
                        'change' => '+12%',
                        'color' => 'indigo',
                        'icon' => 'cog'
                    ],
                    [
                        'title' => 'Tasks Completed',
                        'value' => '1,847',
                        'change' => '+8%',
                        'color' => 'emerald',
                        'icon' => 'check'
                    ],
                    [
                        'title' => 'Time Saved',
                        'value' => '127h',
                        'change' => '+23%',
                        'color' => 'blue',
                        'icon' => 'clock'
                    ],
                    [
                        'title' => 'Success Rate',
                        'value' => '98.2%',
                        'change' => '+1.2%',
                        'color' => 'purple',
                        'icon' => 'chart'
                    ]
                ];
            @endphp

            @foreach($stats as $stat)
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-{{ $stat['color'] }}-100 to-{{ $stat['color'] }}-200 rounded-xl flex items-center justify-center">
                            <div class="w-6 h-6 bg-gradient-to-r from-{{ $stat['color'] }}-500 to-{{ $stat['color'] }}-600 rounded"></div>
                        </div>
                        <span class="text-{{ $stat['color'] }}-600 text-sm font-medium bg-{{ $stat['color'] }}-50 px-2 py-1 rounded-full">
                            {{ $stat['change'] }}
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-1">{{ $stat['value'] }}</h3>
                    <p class="text-gray-600 text-sm">{{ $stat['title'] }}</p>
                </div>
            @endforeach
        </div>

        <!-- Main Dashboard Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Automations -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-gray-900">Recent Automations</h2>
                        <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium">View All</a>
                    </div>
                    
                    <div class="space-y-4">
                        @for($i = 0; $i < 5; $i++)
                            @php
                                $automations = [
                                    ['name' => 'Email Campaign Automation', 'status' => 'Running', 'progress' => 85, 'color' => 'emerald'],
                                    ['name' => 'Data Backup Process', 'status' => 'Completed', 'progress' => 100, 'color' => 'blue'],
                                    ['name' => 'Customer Onboarding', 'status' => 'Running', 'progress' => 62, 'color' => 'indigo'],
                                    ['name' => 'Invoice Generation', 'status' => 'Scheduled', 'progress' => 0, 'color' => 'yellow'],
                                    ['name' => 'Social Media Posting', 'status' => 'Running', 'progress' => 43, 'color' => 'purple']
                                ];
                                $automation = $automations[$i];
                            @endphp
                            
                            <div class="flex items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
                                <div class="w-10 h-10 bg-gradient-to-r from-{{ $automation['color'] }}-500 to-{{ $automation['color'] }}-600 rounded-lg flex items-center justify-center mr-4">
                                    <div class="w-5 h-5 bg-white rounded"></div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">{{ $automation['name'] }}</h3>
                                    <div class="flex items-center mt-1">
                                        <span class="text-sm text-{{ $automation['color'] }}-600 bg-{{ $automation['color'] }}-100 px-2 py-1 rounded-full mr-3">
                                            {{ $automation['status'] }}
                                        </span>
                                        @if($automation['progress'] > 0)
                                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                                <div class="bg-gradient-to-r from-{{ $automation['color'] }}-500 to-{{ $automation['color'] }}-600 h-2 rounded-full" style="width: {{ $automation['progress'] }}%"></div>
                                            </div>
                                            <span class="text-sm text-gray-600 ml-3">{{ $automation['progress'] }}%</span>
                                        @endif
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Activity -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Quick Actions</h2>
                    <div class="space-y-3">
                        @php
                            $actions = [
                                ['name' => 'Create Workflow', 'icon' => 'plus', 'color' => 'indigo'],
                                ['name' => 'Import Data', 'icon' => 'upload', 'color' => 'blue'],
                                ['name' => 'Schedule Task', 'icon' => 'calendar', 'color' => 'emerald'],
                                ['name' => 'View Reports', 'icon' => 'chart', 'color' => 'purple']
                            ];
                        @endphp

                        @foreach($actions as $action)
                            <button class="w-full flex items-center p-3 text-left hover:bg-{{ $action['color'] }}-50 rounded-xl transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-{{ $action['color'] }}-100 group-hover:bg-{{ $action['color'] }}-200 rounded-lg flex items-center justify-center mr-3">
                                    <div class="w-4 h-4 bg-{{ $action['color'] }}-600 rounded"></div>
                                </div>
                                <span class="font-medium text-gray-900 group-hover:text-{{ $action['color'] }}-700">{{ $action['name'] }}</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-{{ $action['color'] }}-600 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Recent Activity</h2>
                    <div class="space-y-4">
                        @for($i = 0; $i < 4; $i++)
                            @php
                                $activities = [
                                    ['action' => 'Workflow completed', 'time' => '2 minutes ago', 'color' => 'emerald'],
                                    ['action' => 'New automation created', 'time' => '1 hour ago', 'color' => 'blue'],
                                    ['action' => 'Data backup finished', 'time' => '3 hours ago', 'color' => 'indigo'],
                                    ['action' => 'Report generated', 'time' => '5 hours ago', 'color' => 'purple']
                                ];
                                $activity = $activities[$i];
                            @endphp
                            
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-{{ $activity['color'] }}-500 rounded-full mr-3"></div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-gray-900">{{ $activity['action'] }}</p>
                                    <p class="text-xs text-gray-500">{{ $activity['time'] }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Chart Section -->
        <div class="mt-8">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-900">Performance Overview</h2>
                    <div class="flex items-center space-x-2">
                        <button class="px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                            Last 7 days
                        </button>
                        <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-colors">
                            Last 30 days
                        </button>
                    </div>
                </div>
                
                <!-- Placeholder for Chart -->
                <div class="h-64 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Performance Analytics</h3>
                        <p class="text-gray-600">Detailed charts and analytics will be displayed here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}
</style>
@endpush
