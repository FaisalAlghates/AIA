@extends('core::layouts.app')

@section('title', 'About Us - AIA Platform')

@section('content')
<div class="min-h-screen relative overflow-hidden">
    <!-- Hero Section -->
    <section class="relative py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-6xl md:text-8xl font-black text-white mb-8 animate-slide-up-fade">
                    About <span class="text-gradient-primary animate-text-shimmer">AIA</span>
                </h1>
                <p class="text-xl text-white/80 max-w-4xl mx-auto leading-relaxed animate-slide-up-fade delay-200">
                    We're on a revolutionary mission to democratize automation and make intelligent business processes accessible to every organization across the globe.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Mission Section -->
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="animate-slide-up-fade delay-300">
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-8">
                        Our <span class="text-gradient-secondary">Mission</span>
                    </h2>
                    <div class="space-y-6">
                        <p class="text-lg text-white/80 leading-relaxed">
                            At AIA, we believe that every business deserves access to intelligent automation solutions that drive unprecedented growth, efficiency, and innovation in the digital age.
                        </p>
                        <p class="text-lg text-white/80 leading-relaxed">
                            Our platform combines cutting-edge AI technology with intuitive interfaces to make enterprise-grade automation accessible to businesses of all sizes and industries.
                        </p>
                        <p class="text-lg text-white/80 leading-relaxed">
                            We're not just building software; we're crafting the future of work where human creativity and AI intelligence collaborate seamlessly.
                        </p>
                    </div>
                    
                    <!-- Mission Values -->
                    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $values = [
                                ['icon' => '🚀', 'title' => 'Innovation First', 'desc' => 'Pushing boundaries with cutting-edge AI'],
                                ['icon' => '🤝', 'title' => 'Human-Centered', 'desc' => 'Technology that enhances human potential'],
                                ['icon' => '🌍', 'title' => 'Global Impact', 'desc' => 'Transforming businesses worldwide'],
                                ['icon' => '⚡', 'title' => 'Rapid Evolution', 'desc' => 'Continuously adapting and improving']
                            ];
                        @endphp
                        
                        @foreach($values as $value)
                            <div class="glass-card p-4 hover-float">
                                <div class="flex items-center space-x-3">
                                    <span class="text-2xl">{{ $value['icon'] }}</span>
                                    <div>
                                        <h4 class="font-bold text-white text-sm">{{ $value['title'] }}</h4>
                                        <p class="text-white/70 text-xs">{{ $value['desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="relative animate-slide-up-fade delay-500">
                    <!-- Interactive Visual Element -->
                    <div class="relative h-96 glass-card p-8 flex items-center justify-center">
                        <div class="relative">
                            <!-- Central Hub -->
                            <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center animate-scale-bounce">
                                <span class="text-white font-black text-2xl">AI</span>
                            </div>
                            
                            <!-- Orbiting Elements -->
                            <div class="absolute -inset-16">
                                @for($i = 0; $i < 6; $i++)
                                    <div class="absolute w-8 h-8 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full animate-floating-particles"
                                         style="
                                             top: {{ 50 + 40 * cos(2 * pi() * $i / 6) }}%;
                                             left: {{ 50 + 40 * sin(2 * pi() * $i / 6) }}%;
                                             animation-delay: {{ $i * 0.5 }}s;
                                         ">
                                    </div>
                                @endfor
                            </div>
                        </div>
                        
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-20">
                            <div class="absolute top-10 left-10 w-20 h-20 bg-blue-500/30 rounded-full blur-xl animate-morphing-blob"></div>
                            <div class="absolute bottom-10 right-10 w-16 h-16 bg-purple-500/30 rounded-full blur-xl animate-morphing-blob delay-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Our <span class="text-gradient-accent">Impact</span>
                </h2>
                <p class="text-xl text-white/80">Numbers that speak to our commitment to excellence</p>
            </div>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $stats = [
                        ['number' => '1,200+', 'label' => 'Companies Served', 'gradient' => 'from-blue-500 to-purple-600'],
                        ['number' => '50M+', 'label' => 'Tasks Automated', 'gradient' => 'from-purple-500 to-pink-600'],
                        ['number' => '99.9%', 'label' => 'Uptime SLA', 'gradient' => 'from-cyan-500 to-blue-600'],
                        ['number' => '24/7', 'label' => 'Support Available', 'gradient' => 'from-green-500 to-cyan-600']
                    ];
                @endphp
                
                @foreach($stats as $index => $stat)
                    <div class="text-center glass-card p-8 hover-lift animate-slide-up-fade" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        <!-- Background Glow -->
                        <div class="absolute inset-0 bg-gradient-to-br {{ $stat['gradient'] }} opacity-0 group-hover:opacity-10 transition-opacity duration-500 rounded-3xl"></div>
                        
                        <div class="relative">
                            <div class="text-5xl font-black text-gradient-primary mb-4 animate-neon-pulse">
                                {{ $stat['number'] }}
                            </div>
                            <div class="text-white/80 font-medium">{{ $stat['label'] }}</div>
                        </div>
                        
                        <!-- Floating Particle -->
                        <div class="absolute top-4 right-4 w-2 h-2 bg-white/30 rounded-full animate-floating-particles" style="animation-delay: {{ 1 + 0.2 * $index }}s"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
                        <div class="text-4xl font-bold text-primary-600 mb-2">50K+</div>
                        <div class="text-neutral-600">Active Automations</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">99.9%</div>
                        <div class="text-neutral-600">Uptime</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">24/7</div>
                        <div class="text-neutral-600">Support</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Team Section -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-neutral-900 mb-4">Meet Our Team</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Meet Our <span class="text-gradient-primary">Team</span>
                </h2>
                <p class="text-xl text-white/80">Visionaries, innovators, and automation experts</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $team = [
                        [
                            'name' => 'Sarah Chen',
                            'role' => 'CEO & Founder',
                            'bio' => 'Former AI researcher at MIT with 15+ years in automation',
                            'gradient' => 'from-blue-500 to-purple-600',
                            'avatar' => 'SC'
                        ],
                        [
                            'name' => 'Marcus Rodriguez',
                            'role' => 'CTO',
                            'bio' => 'Ex-Google engineer specializing in distributed systems',
                            'gradient' => 'from-purple-500 to-pink-600',
                            'avatar' => 'MR'
                        ],
                        [
                            'name' => 'Emily Watson',
                            'role' => 'Head of AI',
                            'bio' => 'PhD in Machine Learning from Stanford University',
                            'gradient' => 'from-cyan-500 to-blue-600',
                            'avatar' => 'EW'
                        ]
                    ];
                @endphp
                
                @foreach($team as $index => $member)
                    <div class="group glass-card p-8 text-center hover-lift animate-slide-up-fade" 
                         style="animation-delay: {{ 0.2 * $index }}s">
                        
                        <!-- Avatar -->
                        <div class="relative mb-6 mx-auto w-24 h-24">
                            <div class="w-24 h-24 bg-gradient-to-br {{ $member['gradient'] }} rounded-full flex items-center justify-center text-white font-black text-xl group-hover:scale-110 transition-transform duration-500 animate-pulse-glow">
                                {{ $member['avatar'] }}
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-br {{ $member['gradient'] }} rounded-full blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-500"></div>
                        </div>
                        
                        <h3 class="text-xl font-bold text-white mb-2">{{ $member['name'] }}</h3>
                        <div class="text-gradient-secondary font-semibold mb-4">{{ $member['role'] }}</div>
                        <p class="text-white/70 text-sm leading-relaxed">{{ $member['bio'] }}</p>
                        
                        <!-- Social Links -->
                        <div class="flex justify-center space-x-3 mt-6">
                            <a href="#" class="p-2 glass rounded-lg text-white/70 hover:text-white transition-colors hover-glow">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286z"/>
                                </svg>
                            </a>
                            <a href="#" class="p-2 glass rounded-lg text-white/70 hover:text-white transition-colors hover-glow">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Vision Section -->
    <section class="relative py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
                Our <span class="text-gradient-accent">Vision</span>
            </h2>
            <p class="text-xl text-white/80 mb-12 leading-relaxed">
                We envision a future where intelligent automation empowers every organization to achieve extraordinary results, where AI and human creativity work in perfect harmony to solve the world's most complex challenges.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('contact.index') }}" class="btn-modern text-white">
                    Join Our Mission
                </a>
                <a href="{{ route('solutions.index') }}" class="btn-glass text-white">
                    Explore Solutions
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
