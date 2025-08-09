@extends('core::layouts.app')

@section('title', 'Solutions - AIA Platform')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-primary-50 to-secondary-50 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6">
                    Our <span class="bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">Solutions</span>
                </h1>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                    Discover intelligent automation solutions tailored for your industry and business needs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Solution Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <div class="w-8 h-8 bg-primary-500 rounded"></div>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Process Automation</h3>
                    <p class="text-neutral-600 mb-6">Streamline repetitive tasks and workflows with intelligent automation.</p>
                    <a href="#" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">Learn More →</a>
                </div>
                
                <!-- Solution Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-secondary-100 rounded-xl flex items-center justify-center mb-6">
                        <div class="w-8 h-8 bg-secondary-500 rounded"></div>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">AI Integration</h3>
                    <p class="text-neutral-600 mb-6">Integrate artificial intelligence into your existing systems seamlessly.</p>
                    <a href="#" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">Learn More →</a>
                </div>
                
                <!-- Solution Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mb-6">
                        <div class="w-8 h-8 bg-success-500 rounded"></div>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Data Analytics</h3>
                    <p class="text-neutral-600 mb-6">Transform your data into actionable insights with advanced analytics.</p>
                    <a href="#" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
