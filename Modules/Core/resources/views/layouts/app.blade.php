<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AIA') }} @isset($title) - {{ $title }} @endisset</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body class="font-sans antialiased bg-white text-neutral-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-neutral-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home.index') }}" class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">AI</span>
                        </div>
                        <span class="text-xl font-bold text-neutral-800">AIA</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home.index') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200 @if(request()->route()->getName() === 'home.index') text-primary-600 font-medium @endif">
                        Home
                    </a>
                    <a href="{{ route('solutions.index') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200 @if(str_contains(request()->route()->getName(), 'solutions')) text-primary-600 font-medium @endif">
                        Solutions
                    </a>
                    <a href="{{ route('automationhub.index') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200 @if(str_contains(request()->route()->getName(), 'automationhub')) text-primary-600 font-medium @endif">
                        Automation Hub
                    </a>
                    <a href="{{ route('about.index') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200 @if(str_contains(request()->route()->getName(), 'about')) text-primary-600 font-medium @endif">
                        About
                    </a>
                    <a href="{{ route('contact.index') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200 @if(str_contains(request()->route()->getName(), 'contact')) text-primary-600 font-medium @endif">
                        Contact
                    </a>
                    
                    <!-- Auth Links -->
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200 @if(str_contains(request()->route()->getName(), 'dashboard')) text-primary-600 font-medium @endif">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-neutral-600 hover:text-primary-600 transition-colors duration-200">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            Get Started
                        </a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="text-neutral-600 hover:text-neutral-900 focus:outline-none focus:text-neutral-900" 
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
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" 
             x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" 
             x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-neutral-200">
                <a href="{{ route('home.index') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">Home</a>
                <a href="{{ route('solutions.index') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">Solutions</a>
                <a href="{{ route('automationhub.index') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">Automation Hub</a>
                <a href="{{ route('about.index') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">About</a>
                <a href="{{ route('contact.index') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">Contact</a>
                
                @auth
                    <a href="{{ route('dashboard') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block px-3 py-2 text-neutral-600 hover:text-primary-600 transition-colors">Login</a>
                    <a href="{{ route('register') }}" class="block px-3 py-2 bg-primary-600 text-white rounded-lg mx-3 text-center">Get Started</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-neutral-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">AI</span>
                        </div>
                        <span class="text-xl font-bold">AIA</span>
                    </div>
                    <p class="text-neutral-400 mb-4 max-w-md">
                        Empowering businesses with intelligent automation solutions that drive efficiency, innovation, and growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-neutral-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-neutral-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-neutral-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Solutions -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Solutions</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors">Process Automation</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors">AI Integration</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors">Workflow Optimization</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors">Data Analytics</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about.index') }}" class="text-neutral-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-neutral-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-neutral-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-neutral-400 text-sm">
                    © {{ date('Y') }} AIA - Automation Intelligence Assistant. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0">
                    <span class="text-neutral-400 text-sm">Made with ❤️ for automation excellence</span>
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
