@extends('core::layouts.app')

@section('title', 'Our Services - AIA')

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
            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-pink-400/40 rounded-full animate-float animation-delay-4000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-32">
            <div class="text-center mb-20">
                <!-- Logo/Icon -->
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Our <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Services</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-white/80 mb-16 max-w-3xl mx-auto font-medium">
                    Discover comprehensive AI-powered automation solutions designed to transform your business operations, 
                    boost productivity, and drive unprecedented growth in the digital age.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="#services" 
                       class="group relative px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                        <span class="relative z-10">Explore Services</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    <a href="#consultation" 
                       class="px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">
                        Free Consultation
                    </a>
                </div>

                <!-- Stats -->
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
                        <div class="text-4xl md:text-5xl font-black text-white mb-2">500+</div>
                        <div class="text-white/80 font-semibold">Happy Customers</div>
                    </div>

                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/30 to-pink-600/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="text-4xl md:text-5xl font-black text-white mb-2">99.9%</div>
                        <div class="text-white/80 font-semibold">Uptime Guarantee</div>
                    </div>

                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-2000ms">
                        <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/30 to-blue-600/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        <div class="relative flex items-center justify-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="text-4xl md:text-5xl font-black text-white mb-2">24/7</div>
                        <div class="text-white/80 font-semibold">Expert Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    AI-Powered <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Solutions</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    Cutting-edge artificial intelligence solutions tailored to meet your business needs and drive digital transformation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Process Automation -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float"
                     style="animation-delay: 0s">
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 group-hover:bg-clip-text transition-all duration-300">
                        Process Automation
                    </h3>
                    <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                        Streamline your business operations with intelligent automation that reduces manual work by 80% and boosts efficiency.
                    </p>
                    
                    <!-- Learn More Link -->
                    <a href="#" class="inline-flex items-center text-blue-400 hover:text-blue-300 font-semibold group-hover:text-blue-300 transition-colors duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 2: AI Integration -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float"
                     style="animation-delay: 0.2s">
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-pink-400 group-hover:bg-clip-text transition-all duration-300">
                        AI Integration
                    </h3>
                    <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                        Seamlessly integrate artificial intelligence into your existing systems for smarter decision-making and predictive analytics.
                    </p>
                    
                    <!-- Learn More Link -->
                    <a href="#" class="inline-flex items-center text-purple-400 hover:text-purple-300 font-semibold group-hover:text-purple-300 transition-colors duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 3: Data Analytics -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float"
                     style="animation-delay: 0.4s">
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-cyan-400 group-hover:to-blue-400 group-hover:bg-clip-text transition-all duration-300">
                        Data Analytics
                    </h3>
                    <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                        Transform raw data into actionable insights with advanced analytics and machine learning algorithms for better business decisions.
                    </p>
                    
                    <!-- Learn More Link -->
                    <a href="#" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 font-semibold group-hover:text-cyan-300 transition-colors duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 4: Cloud Solutions -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float"
                     style="animation-delay: 0.6s">
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-teal-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-500/20 to-teal-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-green-400 group-hover:to-teal-400 group-hover:bg-clip-text transition-all duration-300">
                        Cloud Solutions
                    </h3>
                    <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                        Scalable cloud infrastructure and migration services that ensure your business stays flexible, secure, and always accessible.
                    </p>
                    
                    <!-- Learn More Link -->
                    <a href="#" class="inline-flex items-center text-green-400 hover:text-green-300 font-semibold group-hover:text-green-300 transition-colors duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 5: Machine Learning -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float"
                     style="animation-delay: 0.8s">
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-500/20 to-red-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-orange-400 group-hover:to-red-400 group-hover:bg-clip-text transition-all duration-300">
                        Machine Learning
                    </h3>
                    <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                        Custom machine learning models that learn from your data to provide intelligent recommendations and automate complex decisions.
                    </p>
                    
                    <!-- Learn More Link -->
                    <a href="#" class="inline-flex items-center text-orange-400 hover:text-orange-300 font-semibold group-hover:text-orange-300 transition-colors duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 6: Digital Transformation -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float"
                     style="animation-delay: 1s">
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-violet-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-violet-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <svg class="w-10 h-10 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-violet-400 group-hover:to-purple-400 group-hover:bg-clip-text transition-all duration-300">
                        Digital Transformation
                    </h3>
                    <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                        Complete digital transformation strategies that modernize your business processes and prepare you for the future of work.
                    </p>
                    
                    <!-- Learn More Link -->
                    <a href="#" class="inline-flex items-center text-violet-400 hover:text-violet-300 font-semibold group-hover:text-violet-300 transition-colors duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-72 h-72 bg-purple-500/20 rounded-full filter blur-3xl animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Why Choose <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">AIA</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    We deliver exceptional results through innovative technology, expert knowledge, and unwavering commitment to your success.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-3xl">⚡</span>
                        </div>
                    </div>
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">Fast</div>
                    <div class="text-white/80 font-semibold">Lightning Speed</div>
                </div>

                <!-- Feature 2 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-3xl">🛡️</span>
                        </div>
                    </div>
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">Secure</div>
                    <div class="text-white/80 font-semibold">Enterprise Security</div>
                </div>

                <!-- Feature 3 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-3xl">📈</span>
                        </div>
                    </div>
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">Smart</div>
                    <div class="text-white/80 font-semibold">AI-Powered Intelligence</div>
                </div>

                <!-- Feature 4 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1500ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-teal-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500/20 to-teal-600/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                            <span class="text-3xl">🎯</span>
                        </div>
                    </div>
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">Precise</div>
                    <div class="text-white/80 font-semibold">Accurate Results</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-black to-gray-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Our <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Process</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    A proven methodology that ensures successful project delivery and maximum ROI for your automation investments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl shadow-2xl">
                            1
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Discovery</h3>
                        <p class="text-white/80 leading-relaxed">
                            We analyze your current processes and identify automation opportunities.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl shadow-2xl">
                            2
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Strategy</h3>
                        <p class="text-white/80 leading-relaxed">
                            We develop a comprehensive automation strategy tailored to your goals.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl shadow-2xl">
                            3
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Implementation</h3>
                        <p class="text-white/80 leading-relaxed">
                            We build and deploy your automation solutions with minimal disruption.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-teal-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white font-bold text-xl shadow-2xl">
                            4
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Optimization</h3>
                        <p class="text-white/80 leading-relaxed">
                            We continuously monitor and optimize your solutions for peak performance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="consultation" class="py-20 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-400/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-400/20 rounded-full filter blur-3xl animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                Ready to <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Transform</span> Your Business?
            </h2>
            <p class="text-xl text-white/80 mb-16 max-w-2xl mx-auto font-medium">
                Join thousands of companies that have already automated their workflows and achieved unprecedented growth with our AI-powered solutions.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact.index') }}" 
                   class="group relative px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10">Get Started Free</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute inset-0 bg-white/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('about.index') }}" 
                   class="px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">
                    Browse Templates
                </a>
            </div>
        </div>
    </section>
@endsection
