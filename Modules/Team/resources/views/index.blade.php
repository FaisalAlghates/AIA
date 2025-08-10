@extends('core::layouts.app')

@section('title', 'Our Team - AIA')

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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Meet Our <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Team</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-white/80 mb-16 max-w-3xl mx-auto font-medium">
                    Behind every great AI automation platform is an exceptional team of visionaries, engineers, 
                    and innovators working together to transform the future of business automation.
                </p>

                <!-- Team Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-purple-600/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="text-4xl md:text-5xl font-black text-white mb-2">15+</div>
                        <div class="text-white/80 font-semibold">Team Members</div>
                    </div>

                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/30 to-pink-600/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="text-4xl md:text-5xl font-black text-white mb-2">50+</div>
                        <div class="text-white/80 font-semibold">Years Combined Experience</div>
                    </div>

                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-2000ms">
                        <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/30 to-blue-600/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="text-4xl md:text-5xl font-black text-white mb-2">10+</div>
                        <div class="text-white/80 font-semibold">Countries Represented</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Leadership <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Team</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    Meet the visionary leaders driving innovation and excellence at AIA.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <!-- Faisal Yahya Al-Ghates -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 rounded-3xl overflow-hidden shadow-2xl animate-float">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative p-8">
                        <!-- Avatar -->
                        <div class="flex justify-center mb-6">
                            <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500">
                                <span class="text-4xl font-black text-white">FG</span>
                            </div>
                        </div>
                        
                        <!-- Info -->
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 group-hover:bg-clip-text transition-all duration-300">
                                Faisal Yahya Al-Ghates
                            </h3>
                            <p class="text-purple-400 font-semibold mb-4">Co-Founder & CEO</p>
                            <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                                Visionary leader with over 15 years of experience in AI and automation. 
                                Passionate about transforming businesses through intelligent automation solutions.
                            </p>
                            
                            <!-- Skills -->
                            <div class="flex flex-wrap justify-center gap-2 mb-6">
                                <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm font-medium">AI Strategy</span>
                                <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm font-medium">Leadership</span>
                                <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm font-medium">Innovation</span>
                            </div>
                            
                            <!-- Social Links -->
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="w-10 h-10 bg-white/10 hover:bg-blue-500/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5 text-white/80 hover:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 hover:bg-purple-500/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5 text-white/80 hover:text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Abdulaziz Al-Zaidi -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 rounded-3xl overflow-hidden shadow-2xl animate-float animation-delay-500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative p-8">
                        <!-- Avatar -->
                        <div class="flex justify-center mb-6">
                            <div class="w-32 h-32 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500">
                                <span class="text-4xl font-black text-white">AZ</span>
                            </div>
                        </div>
                        
                        <!-- Info -->
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-pink-400 group-hover:bg-clip-text transition-all duration-300">
                                Abdulaziz Al-Zaidi
                            </h3>
                            <p class="text-pink-400 font-semibold mb-4">Co-Founder & CTO</p>
                            <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                                Technical architect and AI expert with deep expertise in machine learning and automation systems. 
                                Drives the technical innovation behind our cutting-edge platform.
                            </p>
                            
                            <!-- Skills -->
                            <div class="flex flex-wrap justify-center gap-2 mb-6">
                                <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm font-medium">Machine Learning</span>
                                <span class="px-3 py-1 bg-pink-500/20 text-pink-400 rounded-full text-sm font-medium">Architecture</span>
                                <span class="px-3 py-1 bg-orange-500/20 text-orange-400 rounded-full text-sm font-medium">Automation</span>
                            </div>
                            
                            <!-- Social Links -->
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="w-10 h-10 bg-white/10 hover:bg-purple-500/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5 text-white/80 hover:text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/10 hover:bg-pink-500/20 rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5 text-white/80 hover:text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Team Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Core <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Team</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    The talented professionals who make our vision a reality every day.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">SW</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Sarah Wilson</h3>
                        <p class="text-blue-400 font-semibold mb-4">Lead AI Engineer</p>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">
                            Specializes in developing advanced machine learning algorithms and neural networks for automation workflows.
                        </p>
                        <div class="flex flex-wrap justify-center gap-1">
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs">Python</span>
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-xs">TensorFlow</span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-400 rounded-full text-xs">AI</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-emerald-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">MJ</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Michael Johnson</h3>
                        <p class="text-green-400 font-semibold mb-4">Senior Backend Developer</p>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">
                            Builds robust and scalable backend systems that power our automation platform with enterprise-grade reliability.
                        </p>
                        <div class="flex flex-wrap justify-center gap-1">
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded-full text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-xs">PHP</span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs">APIs</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">EL</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Emily Lee</h3>
                        <p class="text-purple-400 font-semibold mb-4">UX/UI Designer</p>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">
                            Creates beautiful and intuitive user experiences that make complex automation workflows simple and accessible.
                        </p>
                        <div class="flex flex-wrap justify-center gap-1">
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-400 rounded-full text-xs">Figma</span>
                            <span class="px-2 py-1 bg-pink-500/20 text-pink-400 rounded-full text-xs">Design</span>
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-400 rounded-full text-xs">UX</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">DK</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">David Kim</h3>
                        <p class="text-orange-400 font-semibold mb-4">DevOps Engineer</p>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">
                            Ensures our platform runs smoothly with advanced infrastructure, monitoring, and deployment automation.
                        </p>
                        <div class="flex flex-wrap justify-center gap-1">
                            <span class="px-2 py-1 bg-orange-500/20 text-orange-400 rounded-full text-xs">AWS</span>
                            <span class="px-2 py-1 bg-red-500/20 text-red-400 rounded-full text-xs">Docker</span>
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs">K8s</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-2000ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">AG</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Anna Garcia</h3>
                        <p class="text-cyan-400 font-semibold mb-4">Data Scientist</p>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">
                            Analyzes complex data patterns to improve our AI models and provide actionable insights for users.
                        </p>
                        <div class="flex flex-wrap justify-center gap-1">
                            <span class="px-2 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-xs">Analytics</span>
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs">ML</span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-400 rounded-full text-xs">Statistics</span>
                        </div>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-2500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">RT</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Robert Taylor</h3>
                        <p class="text-indigo-400 font-semibold mb-4">Security Engineer</p>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">
                            Protects our platform and users with advanced security measures, encryption, and compliance protocols.
                        </p>
                        <div class="flex flex-wrap justify-center gap-1">
                            <span class="px-2 py-1 bg-indigo-500/20 text-indigo-400 rounded-full text-xs">Security</span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-400 rounded-full text-xs">Encryption</span>
                            <span class="px-2 py-1 bg-pink-500/20 text-pink-400 rounded-full text-xs">Compliance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-black to-gray-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Our <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Values</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    The principles that guide everything we do at AIA.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500/20 to-cyan-600/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">🚀</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Innovation</h3>
                        <p class="text-white/80 text-sm">Pushing boundaries with cutting-edge AI technology</p>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">🤝</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Collaboration</h3>
                        <p class="text-white/80 text-sm">Working together to achieve extraordinary results</p>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500/20 to-emerald-600/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">⭐</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Excellence</h3>
                        <p class="text-white/80 text-sm">Delivering the highest quality in everything we do</p>
                    </div>
                </div>

                <!-- Value 4 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500/20 to-red-600/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">❤️</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Impact</h3>
                        <p class="text-white/80 text-sm">Making a meaningful difference for our users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Team CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-400/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-400/20 rounded-full filter blur-3xl animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                Join Our <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Team</span>
            </h2>
            <p class="text-xl text-white/80 mb-16 max-w-2xl mx-auto font-medium">
                Ready to shape the future of AI automation? We're always looking for talented individuals to join our mission.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact.index') }}" 
                   class="group relative px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10">View Careers</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('contact.index') }}" 
                   class="px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>
@endsection
