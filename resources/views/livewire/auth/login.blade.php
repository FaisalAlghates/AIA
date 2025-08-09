<div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -inset-10 opacity-50">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation: blob 7s infinite;"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-yellow-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation: blob 7s infinite; animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse" style="animation: blob 7s infinite; animation-delay: 4s;"></div>
        </div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full opacity-60 animate-bounce" style="animation: float 3s ease-in-out infinite;"></div>
        <div class="absolute top-1/2 left-1/3 w-3 h-3 bg-purple-300 rounded-full opacity-40 animate-bounce" style="animation: float 4s ease-in-out infinite; animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-2 h-2 bg-blue-300 rounded-full opacity-50 animate-bounce" style="animation: float 5s ease-in-out infinite; animation-delay: 2s;"></div>
        <div class="absolute bottom-1/3 right-1/3 w-3 h-3 bg-pink-300 rounded-full opacity-40 animate-bounce" style="animation: float 3s ease-in-out infinite;"></div>
        <div class="absolute bottom-1/4 left-1/2 w-2 h-2 bg-yellow-300 rounded-full opacity-60 animate-bounce" style="animation: float 4s ease-in-out infinite; animation-delay: 1s;"></div>
    </div>

    <div class="relative z-10 flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-md">
            <!-- Glassmorphism Container -->
            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl shadow-2xl p-8 relative overflow-hidden">
                <!-- Inner Glow Effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-white/20 via-transparent to-transparent rounded-3xl"></div>
                
                <!-- Logo and Header -->
                <div class="relative text-center mb-8">
                    <div class="mx-auto w-20 h-20 mb-6 relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-2xl blur-lg opacity-75 animate-pulse"></div>
                        <div class="relative bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center w-full h-full shadow-2xl">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h1 class="text-4xl font-black text-white mb-3 tracking-tight">
                        <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                            Welcome to AIA
                        </span>
                    </h1>
                    <p class="text-white/80 text-lg font-medium mb-2">Automation Intelligence Assistant</p>
                    <p class="text-white/60 text-sm">Next-generation automation platform</p>
                </div>

                <!-- Login Form -->
                <div class="space-y-6">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

                    <form wire:submit="login" class="space-y-6">
                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-semibold text-white/90">Email Address</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-white/60 group-focus-within:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                    </svg>
                                </div>
                                <input wire:model="email" 
                                       type="email" 
                                       id="email"
                                       required 
                                       autofocus 
                                       autocomplete="email"
                                       placeholder="Enter your email address"
                                       class="w-full pl-12 pr-4 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-sm transition-all duration-300 hover:bg-white/20">
                            </div>
                            @error('email') 
                                <p class="text-red-400 text-sm font-medium bg-red-500/10 rounded-lg px-3 py-2 border border-red-500/20">{{ $message }}</p> 
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-semibold text-white/90">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" 
                                       class="text-sm text-blue-400 hover:text-blue-300 font-semibold transition-colors duration-200 hover:underline">
                                        Forgot password?
                                    </a>
                                @endif
                            </div>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-white/60 group-focus-within:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <input wire:model="password" 
                                       type="password" 
                                       id="password"
                                       required 
                                       autocomplete="current-password"
                                       placeholder="Enter your password"
                                       class="w-full pl-12 pr-4 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-sm transition-all duration-300 hover:bg-white/20">
                            </div>
                            @error('password') 
                                <p class="text-red-400 text-sm font-medium bg-red-500/10 rounded-lg px-3 py-2 border border-red-500/20">{{ $message }}</p> 
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center space-x-3">
                            <div class="relative">
                                <input wire:model="remember" 
                                       id="remember" 
                                       type="checkbox" 
                                       class="w-5 h-5 text-blue-600 bg-white/10 border-white/30 rounded focus:ring-blue-500/50 focus:ring-2">
                            </div>
                            <label for="remember" class="text-white/80 text-sm font-medium">
                                Remember me for 30 days
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="group relative w-full overflow-hidden bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white py-4 px-6 rounded-2xl font-bold text-lg shadow-2xl transform transition-all duration-300 hover:scale-[1.02] hover:shadow-3xl focus:outline-none focus:ring-4 focus:ring-purple-500/50">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700 via-purple-700 to-pink-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                <span>Access Dashboard</span>
                            </div>
                        </button>
                    </form>

                    <!-- Sign Up Link -->
                    @if (Route::has('register'))
                        <div class="text-center pt-4">
                            <p class="text-white/70 text-sm">
                                Don't have an account? 
                                <a href="{{ route('register') }}" 
                                   class="font-bold text-transparent bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text hover:from-blue-300 hover:to-purple-300 transition-all duration-200">
                                    Create Account
                                </a>
                            </p>
                        </div>
                    @endif

                    <!-- Features Grid -->
                    <div class="pt-6 border-t border-white/10">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-blue-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-semibold text-sm mb-1">Smart AI</h3>
                                <p class="text-white/60 text-xs">Intelligent automation</p>
                            </div>
                            
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-emerald-500/20 to-emerald-600/20 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-emerald-500/30 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.5-4.5L21 7.5L12 16.5l-4-4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-semibold text-sm mb-1">Secure</h3>
                                <p class="text-white/60 text-xs">Enterprise grade</p>
                            </div>
                            
                            <div class="text-center group">
                                <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-purple-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-purple-500/30 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                                </div>
                                <h3 class="text-white font-semibold text-sm mb-1">Analytics</h3>
                                <p class="text-white/60 text-xs">Real-time insights</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-8">
                <p class="text-white/40 text-sm font-medium">
                    © 2025 AIA - Automation Intelligence Assistant
                </p>
                <p class="text-white/30 text-xs mt-1">
                    Powered by Advanced AI Technology
                </p>
            </div>
        </div>
    </div>
</div>
