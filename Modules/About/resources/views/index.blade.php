@extends('core::layouts.app')

@section('title', 'About Us - AIA Platform')

@section('content')
<div class="min-h-screen">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6">
                    About <span class="bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">AIA</span>
                </h1>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                    We're on a mission to democratize automation and make intelligent business processes accessible to every organization.
                </p>
            </div>
        </section>
        
        <!-- Mission Section -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-neutral-900 mb-6">Our Mission</h2>
                        <p class="text-lg text-neutral-600 mb-6">
                            At AIA, we believe that every business deserves access to intelligent automation solutions that drive growth, efficiency, and innovation.
                        </p>
                        <p class="text-lg text-neutral-600">
                            Our platform combines cutting-edge AI technology with user-friendly interfaces to make automation accessible to businesses of all sizes.
                        </p>
                    </div>
                    <div class="h-64 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-2xl"></div>
                </div>
            </div>
        </section>
        
        <!-- Stats Section -->
        <section class="py-24 bg-neutral-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-neutral-900 mb-4">Our Impact</h2>
                    <p class="text-xl text-neutral-600">Numbers that speak to our commitment to excellence</p>
                </div>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary-600 mb-2">1,200+</div>
                        <div class="text-neutral-600">Companies Served</div>
                    </div>
                    <div class="text-center">
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
                    <p class="text-xl text-neutral-600">The brilliant minds behind AIA</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @for($i = 0; $i < 3; $i++)
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-primary-400 to-secondary-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="text-white text-2xl font-bold">{{ chr(65 + $i) }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-2">{{ ['John Smith', 'Sarah Johnson', 'Mike Chen'][$i] }}</h3>
                        <p class="text-primary-600 font-medium mb-3">{{ ['CEO & Founder', 'CTO', 'Head of AI'][$i] }}</p>
                        <p class="text-neutral-600">Leading innovation in automation technology with over 15 years of experience.</p>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
