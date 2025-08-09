<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AIA') }} @isset($title) - {{ $title }} @endisset</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white overflow-x-hidden">
    <!-- Cyber Grid Background -->
    <div class="fixed inset-0 cyber-grid pointer-events-none z-0"></div>
    
    <!-- Particle Background -->
    <div class="fixed inset-0 particle-bg pointer-events-none z-0"></div>
    
    <!-- Floating Blobs -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-20 left-20 w-96 h-96 bg-gradient-to-r from-blue-500/30 to-purple-600/30 rounded-full blur-3xl animate-morphing-blob"></div>
        <div class="absolute top-1/2 right-20 w-80 h-80 bg-gradient-to-r from-purple-500/30 to-pink-600/30 rounded-full blur-3xl animate-morphing-blob delay-700"></div>
        <div class="absolute bottom-20 left-1/3 w-72 h-72 bg-gradient-to-r from-cyan-500/30 to-blue-600/30 rounded-full blur-3xl animate-morphing-blob delay-1500"></div>
    </div>

    <!-- Navigation -->
    <nav class="glass sticky top-0 z-50 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home.index') }}" class="flex items-center space-x-3 hover-glow">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center animate-scale-bounce">
                            <span class="text-white font-black text-lg">AI</span>
                        </div>
                        <span class="text-2xl font-black text-gradient-primary">AIA</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="{{ route('home.index') }}" 
                       class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float @if(request()->route()->getName() === 'home.index') bg-white/10 text-white font-semibold @endif">
                        Home
                    </a>
                    <a href="{{ route('solutions.index') }}" 
                       class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float @if(str_contains(request()->route()->getName(), 'solutions')) bg-white/10 text-white font-semibold @endif">
                        Solutions
                    </a>
                    <a href="{{ route('automationhub.index') }}" 
                       class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float @if(str_contains(request()->route()->getName(), 'automationhub')) bg-white/10 text-white font-semibold @endif">
                        Automation Hub
                    </a>
                    <a href="{{ route('about.index') }}" 
                       class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float @if(str_contains(request()->route()->getName(), 'about')) bg-white/10 text-white font-semibold @endif">
                        About
                    </a>
                    <a href="{{ route('contact.index') }}" 
                       class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float @if(str_contains(request()->route()->getName(), 'contact')) bg-white/10 text-white font-semibold @endif">
                        Contact
                    </a>
                    
                    <!-- Auth Links -->
                    @auth
                        <a href="{{ route('dashboard') }}" 
                           class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float @if(str_contains(request()->route()->getName(), 'dashboard')) bg-white/10 text-white font-semibold @endif">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" 
                           class="px-6 py-3 rounded-xl text-white/80 hover:text-white transition-all duration-300 hover-float">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                           class="btn-modern text-white ml-4">
                            Get Started
                        </a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="text-white/80 hover:text-white focus:outline-none p-2 rounded-lg hover-glow" 
                            x-data x-on:click="$dispatch('toggle-mobile-menu')">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden" x-data="{ open: false }" x-on:toggle-mobile-menu.window="open = !open" x-show="open" 
             x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" 
             x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4">
            <div class="px-4 pt-4 pb-6 space-y-2 glass border-t border-white/10">
                <a href="{{ route('home.index') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">Home</a>
                <a href="{{ route('solutions.index') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">Solutions</a>
                <a href="{{ route('automationhub.index') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">Automation Hub</a>
                <a href="{{ route('about.index') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">About</a>
                <a href="{{ route('contact.index') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">Contact</a>
                
                @auth
                    <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-xl transition-all duration-300">Login</a>
                    <a href="{{ route('register') }}" class="block px-4 py-3 btn-modern text-white text-center mx-2 mt-3">Get Started</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-gradient-to-t from-black via-gray-900 to-transparent border-t border-white/10">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/80 to-transparent"></div>
            <div class="absolute top-10 left-20 w-32 h-32 bg-gradient-to-r from-blue-500/20 to-purple-600/20 rounded-full blur-3xl animate-floating-particles"></div>
            <div class="absolute top-20 right-40 w-24 h-24 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-full blur-2xl animate-floating-particles delay-1000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center animate-scale-bounce">
                            <span class="text-white font-black text-lg">AI</span>
                        </div>
                        <span class="text-3xl font-black text-gradient-primary">AIA</span>
                    </div>
                    <p class="text-white/70 mb-6 max-w-md leading-relaxed">
                        Empowering businesses with intelligent automation solutions that drive efficiency, innovation, and unprecedented growth in the digital age.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="p-3 glass rounded-xl text-white/70 hover:text-white transition-all duration-300 hover-glow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-3 glass rounded-xl text-white/70 hover:text-white transition-all duration-300 hover-glow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-3 glass rounded-xl text-white/70 hover:text-white transition-all duration-300 hover-glow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="p-3 glass rounded-xl text-white/70 hover:text-white transition-all duration-300 hover-glow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.719-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.1.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.125-2.6 7.44-6.218 7.44-1.214 0-2.357-.629-2.749-1.378 0 0-.602 2.323-.751 2.897-.271 1.056-1.009 2.38-1.5 3.185C9.563 23.812 10.77 24.029 12.017 24.029c6.624 0 11.99-5.367 11.99-11.986C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Solutions -->
                <div>
                    <h3 class="text-xl font-bold mb-6 text-gradient-secondary">Solutions</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Process Automation
                        </a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>AI Integration
                        </a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>Workflow Optimization
                        </a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>Data Analytics
                        </a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="text-xl font-bold mb-6 text-gradient-accent">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about.index') }}" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>About Us
                        </a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Contact
                        </a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>Careers
                        </a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-all duration-300 hover-float flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>Privacy Policy
                        </a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-white/60 text-sm">
                    © {{ date('Y') }} AIA - Automation Intelligence Assistant. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0 flex items-center space-x-2">
                    <span class="text-white/60 text-sm">Made with</span>
                    <div class="animate-scale-bounce">❤️</div>
                    <span class="text-white/60 text-sm">for automation excellence</span>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
    
    <!-- Alpine.js for interactive components -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @stack('scripts')
</body>
</html>
