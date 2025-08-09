@extends('core::layouts.app')

@section('title', 'Home - AIA Platform')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -inset-10 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse" style="animation: float 8s ease-in-out infinite;"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse" style="animation: float 10s ease-in-out infinite; animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse" style="animation: float 12s ease-in-out infinite; animation-delay: 4s;"></div>
        </div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-white rounded-full opacity-60 animate-bounce" style="animation: float 4s ease-in-out infinite;"></div>
        <div class="absolute top-1/2 left-1/3 w-4 h-4 bg-purple-300 rounded-full opacity-40 animate-bounce" style="animation: float 5s ease-in-out infinite; animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-blue-300 rounded-full opacity-50 animate-bounce" style="animation: float 6s ease-in-out infinite; animation-delay: 2s;"></div>
        <div class="absolute bottom-1/3 right-1/3 w-4 h-4 bg-pink-300 rounded-full opacity-40 animate-bounce" style="animation: float 4s ease-in-out infinite;"></div>
        <div class="absolute bottom-1/4 left-1/2 w-3 h-3 bg-yellow-300 rounded-full opacity-60 animate-bounce" style="animation: float 5s ease-in-out infinite; animation-delay: 1s;"></div>
        <div class="absolute top-10 right-10 w-2 h-2 bg-cyan-300 rounded-full opacity-50 animate-bounce" style="animation: float 3s ease-in-out infinite; animation-delay: 3s;"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-32">
            <div class="text-center">
                <!-- Logo/Icon -->
                <div class="mx-auto w-32 h-32 mb-8 relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-3xl blur-lg opacity-75 animate-pulse"></div>
                    <div class="relative bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl flex items-center justify-center w-full h-full shadow-2xl">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tight">
                    <span class="block mb-4">Automate Your</span>
                    <span class="block bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Future Today
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-white/80 mb-12 max-w-4xl mx-auto leading-relaxed font-medium">
                    Transform your business with <span class="font-bold text-transparent bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text">AI-powered automation</span> 
                    solutions that boost productivity, reduce costs, and scale operations intelligently.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="{{ route('contact.index') }}" 
                       class="group relative overflow-hidden px-10 py-5 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white font-bold text-xl rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 via-purple-700 to-pink-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="relative z-10 flex items-center space-x-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Start Your Journey</span>
                        </span>
                    </a>
                    <a href="{{ route('solutions.index') }}" 
                       class="px-10 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-xl rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-xl">
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16">
                    @php
                        $stats = [
                            ['value' => '10K+', 'label' => 'Happy Customers', 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z'],
                            ['value' => '500K+', 'label' => 'Automated Tasks', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['value' => '99.9%', 'label' => 'Uptime Guarantee', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['value' => '24/7', 'label' => 'Expert Support', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z']
                        ];
                    @endphp
                    @foreach($stats as $index => $stat)
                        <div class="group backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 shadow-2xl hover:bg-white/20 transition-all duration-300 hover:scale-105">
                            <div class="flex flex-col items-center text-center">
                                <div class="w-16 h-16 mb-4 bg-gradient-to-br from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path>
                                    </svg>
                                </div>
                                <div class="text-4xl md:text-5xl font-black text-white mb-2">{{ $stat['value'] }}</div>
                                <div class="text-white/80 font-semibold">{{ $stat['label'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
                    Why Choose <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">AIA</span>?
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    Discover the power of intelligent automation with cutting-edge AI technology
                </p>
            </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'title' => 'AI-Powered Automation',
                            'description' => 'Leverage advanced artificial intelligence to automate complex workflows, predict outcomes, and optimize performance in real-time.',
                            'icon' => '🤖',
                            'gradient' => 'from-blue-500 to-purple-600'
                        ],
                        [
                            'title' => 'No-Code Solutions',
                            'description' => 'Build sophisticated automation workflows without writing a single line of code using our intuitive drag-and-drop interface.',
                            'icon' => '🎯',
                            'gradient' => 'from-purple-500 to-pink-600'
                        ],
                        [
                            'title' => 'Enterprise Security',
                            'description' => 'Bank-grade security with end-to-end encryption, compliance certifications, and enterprise-level access controls.',
                            'icon' => '🔐',
                            'gradient' => 'from-cyan-500 to-blue-600'
                        ],
                        [
                            'title' => 'Real-Time Analytics',
                            'description' => 'Monitor performance, track metrics, and gain actionable insights with comprehensive real-time analytics dashboards.',
                            'icon' => '📊',
                            'gradient' => 'from-blue-500 to-cyan-600'
                        ],
                        [
                            'title' => 'Seamless Integration',
                            'description' => 'Connect with 500+ popular apps and services through pre-built integrations and robust API ecosystem.',
                            'icon' => '🔗',
                            'gradient' => 'from-purple-500 to-blue-600'
                        ],
                        [
                            'title' => 'Smart Templates',
                            'description' => 'Get started instantly with industry-specific automation templates designed by experts and optimized for results.',
                            'icon' => '⚡',
                            'gradient' => 'from-pink-500 to-purple-600'
                        ]
                    ];
                @endphp
                @foreach($features as $index => $feature)
                    <div class="group relative overflow-hidden rounded-3xl p-8 backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 animate-float" 
                         style="animation-delay: {{ 0.2 * $index }}s">
                        
                        <!-- Background Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-br {{ $feature['gradient'] }} opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br {{ $feature['gradient'] }} flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                <span class="text-3xl">{{ $feature['icon'] }}</span>
                            </div>
                            <!-- Glow Effect -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br {{ $feature['gradient'] }} blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:{{ $feature['gradient'] }} group-hover:bg-clip-text transition-all duration-300">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">{{ $feature['description'] }}</p>
                        
                        <!-- Learn More Link -->
                        <a href="#" class="inline-flex items-center text-white/70 font-semibold group-hover:text-white transition-colors duration-300 hover:bg-gradient-to-r hover:{{ $feature['gradient'] }} hover:bg-clip-text hover:text-transparent">
                            Learn More 
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        
                        <!-- Floating Particles -->
                        <div class="absolute top-4 right-4 w-2 h-2 bg-white/30 rounded-full animate-float" style="animation-delay: {{ 1 + 0.3 * $index }}s"></div>
                        <div class="absolute bottom-6 left-6 w-1 h-1 bg-white/20 rounded-full animate-float" style="animation-delay: {{ 2 + 0.4 * $index }}s"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-20 left-10 w-40 h-40 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full blur-3xl opacity-30 animate-blob"></div>
                <div class="absolute top-40 right-20 w-32 h-32 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full blur-2xl opacity-30 animate-blob animation-delay-2000"></div>
                <div class="absolute bottom-20 left-1/2 w-48 h-48 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-5xl md:text-7xl font-black text-white mb-8">
                Ready to <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">Transform</span><br>Your Business?
            </h2>
            <p class="text-xl text-white/80 mb-12 max-w-3xl mx-auto font-medium">
                Join thousands of companies already using AIA to automate their workflows, boost productivity, and drive unprecedented growth.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('contact.index') }}" 
                   class="group relative px-12 py-5 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-500 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10">Get Started Free</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 bg-white/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </a>
                <a href="{{ url('/automation-hub') }}" 
                   class="group relative px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-500 hover:bg-white/20 hover:scale-105 overflow-hidden">
                    <span class="relative z-10">Browse Templates</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-purple-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <!-- Floating particles -->
            <div class="absolute top-20 left-20 w-2 h-2 bg-blue-400/30 rounded-full animate-float"></div>
            <div class="absolute top-40 right-40 w-1 h-1 bg-purple-400/30 rounded-full animate-float animation-delay-2000"></div>
            <div class="absolute bottom-40 left-1/3 w-3 h-3 bg-pink-400/30 rounded-full animate-float animation-delay-4000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
                    Trusted by <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">Industry Leaders</span>
                </h2>
                <p class="text-xl text-white/80 font-medium">
                    See what our customers are saying about their automation journey
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for($i = 0; $i < 3; $i++)
                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 hover:scale-105 animate-float" 
                         style="animation-delay: {{ 0.3 * $i }}s">
                        
                        <!-- Background Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Stars -->
                        <div class="relative flex items-center mb-6">
                            @for($j = 0; $j < 5; $j++)
                                <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L0 6.91l6.564-.955L10 0l3.436 5.955L20 6.91l-5.245 4.635L15.878 18z"/>
                                </svg>
                            @endfor
                        </div>
                        
                        <!-- Quote -->
                        <blockquote class="relative text-white/90 text-lg mb-8 italic leading-relaxed font-medium">
                            "AIA has completely revolutionized our operations. We've reduced manual work by 80% and our team can now focus on strategic initiatives that drive real value."
                        </blockquote>
                        
                        <!-- Author -->
                        <div class="relative flex items-center">
                            <div class="w-16 h-16 bg-gradient-to-br {{ ['from-blue-500 to-purple-600', 'from-purple-500 to-pink-600', 'from-cyan-500 to-blue-600'][$i] }} rounded-full flex items-center justify-center text-white font-bold text-xl mr-4 shadow-lg">
                                {{ chr(65 + $i) }}
                            </div>
                            <div>
                                <div class="font-bold text-white text-lg">{{ ['Alex Johnson', 'Sarah Chen', 'Michael Rodriguez'][$i] }}</div>
                                <div class="text-white/70 font-medium">{{ ['CTO, TechCorp', 'Operations Director, FinanceFlow', 'CEO, AutomateNow'][$i] }}</div>
                            </div>
                        </div>
                        
                        <!-- Floating Particles -->
                        <div class="absolute top-4 right-4 w-1 h-1 bg-white/30 rounded-full animate-float" style="animation-delay: {{ 1 + 0.2 * $i }}s"></div>
                        <div class="absolute bottom-6 left-6 w-2 h-2 bg-white/20 rounded-full animate-float" style="animation-delay: {{ 2 + 0.3 * $i }}s"></div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-purple-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-10 right-20 w-32 h-32 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute bottom-20 left-20 w-40 h-40 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Stay Updated with <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">AIA</span>
            </h2>
            <p class="text-xl text-white/80 mb-8 font-medium">
                Get the latest automation insights, tips, and updates delivered to your inbox.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" 
                       class="flex-1 px-6 py-4 rounded-xl backdrop-blur-xl bg-white/10 border border-white/20 focus:ring-2 focus:ring-blue-500 text-white placeholder-white/60 transition-all duration-300">
                <button class="group relative px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-xl transition-all duration-300 hover:scale-105 overflow-hidden">
                    <span class="relative z-10">Subscribe</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
            </div>
        </div>
    </section>
</div>
@endsection
}


