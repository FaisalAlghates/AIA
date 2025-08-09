@extends('core::layouts.app')

@section('title', 'Automation Hub - AIA Platform')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-secondary-50 to-primary-50 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6">
                    Automation <span class="bg-gradient-to-r from-secondary-600 to-primary-600 bg-clip-text text-transparent">Hub</span>
                </h1>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                    Browse our library of pre-built automation templates and workflows to jumpstart your productivity.
                </p>
            </div>
            
            <!-- Search and Filter -->
            <div class="bg-white rounded-2xl p-8 shadow-lg mb-12">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <input type="text" placeholder="Search automation templates..." 
                               class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    <button class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-xl font-semibold transition-colors">
                        Search
                    </button>
                </div>
            </div>
            
            <!-- Template Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for($i = 1; $i <= 6; $i++)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-primary-100 to-secondary-100"></div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">
                                {{ ['CRM', 'Finance', 'HR', 'Marketing', 'Support', 'Sales'][$i-1] }}
                            </span>
                            <div class="flex items-center text-warning-500">
                                @for($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L0 6.91l6.564-.955L10 0l3.436 5.955L20 6.91l-5.245 4.635L15.878 18z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-2">Automation Template {{ $i }}</h3>
                        <p class="text-neutral-600 mb-4">Streamline your workflow with this intelligent automation solution.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-neutral-500">{{ rand(100, 999) }} downloads</span>
                            <button class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                Use Template
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
