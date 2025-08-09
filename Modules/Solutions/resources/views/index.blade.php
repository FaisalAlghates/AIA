@extends('core::layouts.app')

@section('title', 'Solutions - AIA Platform')

@section('content')
<div class="min-h-screen relative overflow-hidden">
    <!-- Hero Section -->
    <section class="relative py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-6xl md:text-8xl font-black text-white mb-8 animate-slide-up-fade">
                    Our <span class="text-gradient-primary animate-text-shimmer">Solutions</span>
                </h1>
                <p class="text-xl text-white/80 max-w-4xl mx-auto leading-relaxed animate-slide-up-fade delay-200">
                    Discover intelligent automation solutions powered by cutting-edge AI technology, tailored for your industry and designed to revolutionize your business operations.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Solutions Grid -->
    <section class="relative py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $solutions = [
                        [
                            'title' => 'Process Automation',
                            'description' => 'Streamline repetitive tasks and workflows with intelligent automation that learns and adapts to your business processes.',
                            'icon' => '⚙️',
                            'gradient' => 'from-blue-500 to-purple-600',
                            'features' => ['Workflow Designer', 'Task Scheduling', 'Real-time Monitoring', 'Smart Triggers']
                        ],
                        [
                            'title' => 'AI Integration',
                            'description' => 'Integrate artificial intelligence into your existing systems seamlessly with our advanced AI-powered solutions.',
                            'icon' => '🤖',
                            'gradient' => 'from-purple-500 to-pink-600',
                            'features' => ['Machine Learning', 'Natural Language Processing', 'Computer Vision', 'Predictive Analytics']
                        ],
                        [
                            'title' => 'Data Analytics',
                            'description' => 'Transform your data into actionable insights with advanced analytics and intelligent reporting capabilities.',
                            'icon' => '📊',
                            'gradient' => 'from-cyan-500 to-blue-600',
                            'features' => ['Real-time Dashboards', 'Predictive Models', 'Custom Reports', 'Data Visualization']
                        ],
                        [
                            'title' => 'Cloud Integration',
                            'description' => 'Seamlessly connect and automate your cloud infrastructure with enterprise-grade security and scalability.',
                            'icon' => '☁️',
                            'gradient' => 'from-green-500 to-cyan-600',
                            'features' => ['Multi-cloud Support', 'Auto Scaling', 'Security Compliance', 'Cost Optimization']
                        ],
                        [
                            'title' => 'API Management',
                            'description' => 'Build, manage, and scale your APIs with intelligent routing, monitoring, and security features.',
                            'icon' => '🔗',
                            'gradient' => 'from-orange-500 to-red-600',
                            'features' => ['API Gateway', 'Rate Limiting', 'Analytics', 'Developer Portal']
                        ],
                        [
                            'title' => 'Workflow Optimization',
                            'description' => 'Optimize your business workflows with AI-driven insights and automated process improvements.',
                            'icon' => '🎯',
                            'gradient' => 'from-pink-500 to-purple-600',
                            'features' => ['Process Mining', 'Bottleneck Detection', 'Performance Metrics', 'Optimization Suggestions']
                        ]
                    ];
                @endphp
                
                @foreach($solutions as $index => $solution)
                    <div class="group glass-card p-8 hover-lift animate-slide-up-fade" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        
                        <!-- Background Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-br {{ $solution['gradient'] }} opacity-0 group-hover:opacity-10 transition-opacity duration-500 rounded-3xl"></div>
                        
                        <!-- Icon -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br {{ $solution['gradient'] }} flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-lg animate-pulse-glow">
                                <span class="text-3xl">{{ $solution['icon'] }}</span>
                            </div>
                            <!-- Glow Effect -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br {{ $solution['gradient'] }} blur-xl opacity-0 group-hover:opacity-40 transition-opacity duration-500"></div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-gradient-primary transition-all duration-300">
                            {{ $solution['title'] }}
                        </h3>
                        <p class="text-white/80 leading-relaxed mb-6 group-hover:text-white transition-colors duration-300">
                            {{ $solution['description'] }}
                        </p>
                        
                        <!-- Features -->
                        <div class="mb-6">
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($solution['features'] as $feature)
                                    <div class="flex items-center text-sm text-white/70">
                                        <div class="w-1.5 h-1.5 bg-gradient-to-r {{ $solution['gradient'] }} rounded-full mr-2"></div>
                                        {{ $feature }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Learn More Button -->
                        <a href="#" class="group/btn relative inline-flex items-center px-6 py-3 bg-gradient-to-r {{ $solution['gradient'] }} text-white font-semibold rounded-xl transition-all duration-300 hover:scale-105 overflow-hidden">
                            <span class="relative z-10">Learn More</span>
                            <svg class="relative z-10 ml-2 w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <!-- Shine Effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover/btn:translate-x-full transition-transform duration-700"></div>
                        </a>
                        
                        <!-- Floating Particles -->
                        <div class="absolute top-4 right-4 w-2 h-2 bg-white/30 rounded-full animate-floating-particles" style="animation-delay: {{ 1 + 0.3 * $index }}s"></div>
                        <div class="absolute bottom-6 left-6 w-1 h-1 bg-white/20 rounded-full animate-floating-particles" style="animation-delay: {{ 2 + 0.4 * $index }}s"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="relative py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
                Ready to <span class="text-gradient-secondary">Transform</span> Your Business?
            </h2>
            <p class="text-xl text-white/80 mb-12 max-w-3xl mx-auto">
                Let our experts help you choose the perfect solution for your needs and guide you through the implementation process.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('contact.index') }}" class="btn-modern text-white">
                    Get Free Consultation
                </a>
                <a href="{{ route('automationhub.index') }}" class="btn-glass text-white">
                    Explore Templates
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
