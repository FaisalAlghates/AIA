@extends('core::layouts.app')

@section('title', 'Analytics Dashboard - AIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-blue-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-2000ms"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-cyan-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-4000ms"></div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-20 w-2 h-2 bg-white/30 rounded-full animate-float"></div>
            <div class="absolute top-40 right-40 w-3 h-3 bg-purple-400/40 rounded-full animate-float animation-delay-1000ms"></div>
            <div class="absolute bottom-20 right-20 w-2 h-2 bg-blue-400/40 rounded-full animate-float animation-delay-2000ms"></div>
            <div class="absolute bottom-40 left-40 w-3 h-3 bg-cyan-400/40 rounded-full animate-float animation-delay-3000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-32">
            <div class="text-center mb-20">
                <!-- Logo/Icon -->
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Analytics <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Dashboard</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-white/80 mb-16 max-w-3xl mx-auto font-medium">
                    Unlock powerful insights from your automation workflows with real-time analytics, 
                    comprehensive reporting, and AI-driven business intelligence.
                </p>

                <!-- Time Range Selector -->
                <div class="flex justify-center mb-16">
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-2 flex items-center space-x-2">
                        <button class="time-range-btn active px-6 py-3 rounded-xl text-white font-semibold transition-all duration-300" data-range="24h">24h</button>
                        <button class="time-range-btn px-6 py-3 rounded-xl text-white/80 font-semibold transition-all duration-300 hover:text-white" data-range="7d">7d</button>
                        <button class="time-range-btn px-6 py-3 rounded-xl text-white/80 font-semibold transition-all duration-300 hover:text-white" data-range="30d">30d</button>
                        <button class="time-range-btn px-6 py-3 rounded-xl text-white/80 font-semibold transition-all duration-300 hover:text-white" data-range="90d">90d</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Overview Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Key Metrics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Total Workflows -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500/20 to-cyan-600/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-green-400 text-sm font-semibold">+12.5%</span>
                        </div>
                        <div class="text-3xl font-black text-white mb-2">1,247</div>
                        <div class="text-white/80 text-sm">Total Workflows</div>
                        <div class="mt-4 h-2 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-600 rounded-full animate-pulse" style="width: 78%"></div>
                        </div>
                    </div>
                </div>

                <!-- API Calls -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                                </svg>
                            </div>
                            <span class="text-green-400 text-sm font-semibold">+24.8%</span>
                        </div>
                        <div class="text-3xl font-black text-white mb-2">89.2K</div>
                        <div class="text-white/80 text-sm">API Calls Today</div>
                        <div class="mt-4 h-2 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-pink-600 rounded-full animate-pulse" style="width: 65%"></div>
                        </div>
                    </div>
                </div>

                <!-- Success Rate -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-emerald-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500/20 to-emerald-600/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-green-400 text-sm font-semibold">+2.1%</span>
                        </div>
                        <div class="text-3xl font-black text-white mb-2">98.7%</div>
                        <div class="text-white/80 text-sm">Success Rate</div>
                        <div class="mt-4 h-2 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-500 to-emerald-600 rounded-full animate-pulse" style="width: 98%"></div>
                        </div>
                    </div>
                </div>

                <!-- Response Time -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500/20 to-red-600/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-red-400 text-sm font-semibold">-8.3%</span>
                        </div>
                        <div class="text-3xl font-black text-white mb-2">124ms</div>
                        <div class="text-white/80 text-sm">Avg Response Time</div>
                        <div class="mt-4 h-2 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-orange-500 to-red-600 rounded-full animate-pulse" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Workflow Performance Chart -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-bold text-white">Workflow Performance</h3>
                        <div class="flex space-x-2">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                <span class="text-white/80 text-sm">Executions</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                                <span class="text-white/80 text-sm">Success</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mock Chart -->
                    <div class="relative h-64">
                        <svg class="w-full h-full" viewBox="0 0 400 200">
                            <!-- Grid lines -->
                            <defs>
                                <pattern id="grid" width="40" height="20" patternUnits="userSpaceOnUse">
                                    <path d="M 40 0 L 0 0 0 20" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#grid)" />
                            
                            <!-- Chart lines -->
                            <path d="M 20 160 Q 60 120 100 140 T 180 100 T 260 80 T 340 60 T 380 40" 
                                  fill="none" stroke="url(#gradient1)" stroke-width="3" opacity="0.8"/>
                            <path d="M 20 180 Q 60 150 100 160 T 180 130 T 260 110 T 340 90 T 380 70" 
                                  fill="none" stroke="url(#gradient2)" stroke-width="3" opacity="0.8"/>
                            
                            <!-- Gradients -->
                            <defs>
                                <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#06B6D4;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#8B5CF6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#EC4899;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>

                <!-- API Usage Chart -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-bold text-white">API Usage</h3>
                        <span class="text-white/60 text-sm">Last 7 days</span>
                    </div>
                    
                    <!-- Mock Bar Chart -->
                    <div class="flex items-end justify-between h-64 space-x-2">
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-blue-600 to-cyan-400 rounded-t animate-pulse" style="height: 60%"></div>
                            <span class="text-white/60 text-xs mt-2">Mon</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-purple-600 to-pink-400 rounded-t animate-pulse animation-delay-500ms" style="height: 80%"></div>
                            <span class="text-white/60 text-xs mt-2">Tue</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-green-600 to-emerald-400 rounded-t animate-pulse animation-delay-1000ms" style="height: 45%"></div>
                            <span class="text-white/60 text-xs mt-2">Wed</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-orange-600 to-yellow-400 rounded-t animate-pulse animation-delay-1500ms" style="height: 90%"></div>
                            <span class="text-white/60 text-xs mt-2">Thu</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-red-600 to-pink-400 rounded-t animate-pulse animation-delay-2000ms" style="height: 75%"></div>
                            <span class="text-white/60 text-xs mt-2">Fri</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-indigo-600 to-purple-400 rounded-t animate-pulse animation-delay-2500ms" style="height: 55%"></div>
                            <span class="text-white/60 text-xs mt-2">Sat</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-gradient-to-t from-cyan-600 to-blue-400 rounded-t animate-pulse animation-delay-3000ms" style="height: 65%"></div>
                            <span class="text-white/60 text-xs mt-2">Sun</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Analytics Table -->
            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl overflow-hidden">
                <div class="p-8 border-b border-white/10">
                    <h3 class="text-2xl font-bold text-white mb-2">Workflow Details</h3>
                    <p class="text-white/80">Detailed performance metrics for your automation workflows</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-white/5">
                            <tr>
                                <th class="px-6 py-4 text-left text-white font-semibold">Workflow Name</th>
                                <th class="px-6 py-4 text-center text-white font-semibold">Executions</th>
                                <th class="px-6 py-4 text-center text-white font-semibold">Success Rate</th>
                                <th class="px-6 py-4 text-center text-white font-semibold">Avg Time</th>
                                <th class="px-6 py-4 text-center text-white font-semibold">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10">
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-white font-medium">Email Automation</div>
                                            <div class="text-white/60 text-sm">Customer onboarding</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center text-white/80">1,247</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-green-400 font-semibold">98.2%</span>
                                </td>
                                <td class="px-6 py-4 text-center text-white/80">2.3s</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm font-medium">Active</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-white font-medium">Data Processing</div>
                                            <div class="text-white/60 text-sm">Daily reports generation</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center text-white/80">892</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-green-400 font-semibold">99.1%</span>
                                </td>
                                <td class="px-6 py-4 text-center text-white/80">1.8s</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm font-medium">Active</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-white font-medium">Backup System</div>
                                            <div class="text-white/60 text-sm">Automated database backup</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center text-white/80">324</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="text-yellow-400 font-semibold">95.4%</span>
                                </td>
                                <td class="px-6 py-4 text-center text-white/80">5.2s</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-sm font-medium">Warning</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Advanced <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Analytics</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    Powerful analytics features to optimize your automation workflows and maximize efficiency.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Real-time Monitoring -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500/20 to-cyan-600/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-cyan-400 group-hover:bg-clip-text transition-all duration-300">
                            Real-time Monitoring
                        </h3>
                        <p class="text-white/80 leading-relaxed group-hover:text-white transition-colors duration-300">
                            Monitor your workflows in real-time with live updates, instant alerts, and performance metrics.
                        </p>
                    </div>
                </div>

                <!-- Predictive Analytics -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-pink-400 group-hover:bg-clip-text transition-all duration-300">
                            Predictive Analytics
                        </h3>
                        <p class="text-white/80 leading-relaxed group-hover:text-white transition-colors duration-300">
                            AI-powered predictions to forecast workflow performance and identify optimization opportunities.
                        </p>
                    </div>
                </div>

                <!-- Custom Reports -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-emerald-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500/20 to-emerald-600/20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-green-400 group-hover:to-emerald-400 group-hover:bg-clip-text transition-all duration-300">
                            Custom Reports
                        </h3>
                        <p class="text-white/80 leading-relaxed group-hover:text-white transition-colors duration-300">
                            Generate detailed custom reports with flexible filtering, scheduling, and export options.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-400/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-400/20 rounded-full filter blur-3xl animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                Ready to <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Optimize</span>?
            </h2>
            <p class="text-xl text-white/80 mb-16 max-w-2xl mx-auto font-medium">
                Start leveraging advanced analytics to optimize your workflows and boost performance today.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact.index') }}" 
                   class="group relative px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10">Start Analytics</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('services.index') }}" 
                   class="px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">
                    View All Features
                </a>
            </div>
        </div>
    </section>

    <script>
        // Time Range Selector
        document.querySelectorAll('.time-range-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.time-range-btn').forEach(b => {
                    b.classList.remove('active');
                    b.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-purple-600');
                    b.classList.add('text-white/80');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                this.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-purple-600');
                this.classList.remove('text-white/80');
                this.classList.add('text-white');
                
                // Update data (mock functionality)
                const range = this.dataset.range;
                updateDashboard(range);
            });
        });

        function updateDashboard(range) {
            // Mock function to simulate data updates
            console.log(`Updating dashboard for range: ${range}`);
            
            // Add loading animation
            document.querySelectorAll('.animate-pulse').forEach(el => {
                el.style.animationDuration = '0.5s';
                setTimeout(() => {
                    el.style.animationDuration = '2s';
                }, 500);
            });
        }

        // Initialize with default active state
        document.addEventListener('DOMContentLoaded', function() {
            const defaultBtn = document.querySelector('.time-range-btn.active');
            if (defaultBtn) {
                defaultBtn.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-purple-600');
                defaultBtn.classList.remove('text-white/80');
            }
        });
    </script>
@endsection
