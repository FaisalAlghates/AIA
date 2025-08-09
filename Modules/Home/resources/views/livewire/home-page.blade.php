<div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#818cf8" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)"/>
            </svg>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute bottom-40 left-20 w-12 h-12 bg-gradient-to-r from-green-400 to-blue-400 rounded-full opacity-20 animate-pulse delay-1000"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-32">
            <div class="text-center">
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 mb-8 animate-fade-in">
                    <span class="block">Automate Your</span>
                    <span class="block bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 bg-clip-text text-transparent">
                        Future Today
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-600 mb-12 max-w-4xl mx-auto leading-relaxed animate-slide-up">
                    Transform your business with <span class="font-semibold text-indigo-600">AI-powered automation</span> 
                    solutions that boost productivity, reduce costs, and scale your operations intelligently.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16 animate-slide-up" style="animation-delay: 0.2s">
                    <a href="{{ route('contact.index') }}" 
                       class="group relative px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:from-indigo-700 hover:to-purple-700 hover:scale-105 hover:shadow-2xl">
                        <span class="relative z-10">Start Your Journey</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-700 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    <a href="{{ route('solutions.index') }}" 
                       class="px-8 py-4 border-2 border-indigo-600 text-indigo-600 font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-indigo-600 hover:text-white hover:scale-105 hover:shadow-xl">
                        Explore Solutions
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16">
                    @foreach($stats as $index => $stat)
                        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 animate-scale-in" 
                             style="animation-delay: {{ 0.4 + ($index * 0.1) }}s">
                            <div class="text-3xl md:text-4xl font-bold text-indigo-600 mb-2">{{ $stat['value'] }}</div>
                            <div class="text-gray-600 font-medium">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Why Choose <span class="text-indigo-600">AIA</span>?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover the power of intelligent automation with our comprehensive platform designed for modern businesses.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($features as $index => $feature)
                    <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 animate-slide-up" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        
                        <!-- Icon -->
                        <div class="relative mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-{{ $feature['color'] }}-100 to-{{ $feature['color'] }}-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <div class="w-8 h-8 bg-gradient-to-r from-{{ $feature['color'] }}-500 to-{{ $feature['color'] }}-600 rounded-lg"></div>
                            </div>
                            <!-- Floating effect -->
                            <div class="absolute -inset-2 bg-gradient-to-r from-{{ $feature['color'] }}-500 to-{{ $feature['color'] }}-600 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-xl"></div>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-{{ $feature['color'] }}-600 transition-colors duration-300">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">{{ $feature['description'] }}</p>
                        
                        <!-- Learn More Link -->
                        <a href="#" class="inline-flex items-center text-{{ $feature['color'] }}-600 font-semibold group-hover:text-{{ $feature['color'] }}-700 transition-colors duration-300">
                            Learn More 
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-r from-indigo-900 via-purple-900 to-blue-900 relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute top-0 left-0 w-full h-full opacity-30">
            <div class="absolute top-20 left-20 w-32 h-32 bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full blur-xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-40 h-40 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-xl animate-pulse delay-1000"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Ready to Transform Your Business?
            </h2>
            <p class="text-xl text-indigo-100 mb-12 max-w-3xl mx-auto">
                Join thousands of companies already using AIA to automate their workflows, boost productivity, and drive unprecedented growth.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('contact.index') }}" 
                   class="px-10 py-4 bg-white text-indigo-900 font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-gray-100 hover:scale-105 hover:shadow-2xl">
                    Get Started Free
                </a>
                <a href="{{ route('automationhub.index') }}" 
                   class="px-10 py-4 border-2 border-white text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white hover:text-indigo-900 hover:scale-105">
                    Browse Templates
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Trusted by <span class="text-indigo-600">Industry Leaders</span>
                </h2>
                <p class="text-xl text-gray-600">
                    See what our customers are saying about their automation journey
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for($i = 0; $i < 3; $i++)
                    <div class="bg-gradient-to-br from-gray-50 to-indigo-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 animate-slide-up" 
                         style="animation-delay: {{ 0.1 * $i }}s">
                        
                        <!-- Stars -->
                        <div class="flex items-center mb-6">
                            @for($j = 0; $j < 5; $j++)
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L0 6.91l6.564-.955L10 0l3.436 5.955L20 6.91l-5.245 4.635L15.878 18z"/>
                                </svg>
                            @endfor
                        </div>
                        
                        <!-- Quote -->
                        <blockquote class="text-gray-700 text-lg mb-8 italic leading-relaxed">
                            "AIA has completely revolutionized our operations. We've reduced manual work by 80% and our team can now focus on strategic initiatives that drive real value."
                        </blockquote>
                        
                        <!-- Author -->
                        <div class="flex items-center">
                            <div class="w-14 h-14 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                {{ chr(65 + $i) }}
                            </div>
                            <div>
                                <div class="font-bold text-gray-900 text-lg">{{ ['Alex Johnson', 'Sarah Chen', 'Michael Rodriguez'][$i] }}</div>
                                <div class="text-indigo-600 font-medium">{{ ['CTO, TechCorp', 'Operations Director, FinanceFlow', 'CEO, AutomateNow'][$i] }}</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-gradient-to-r from-gray-900 to-indigo-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Stay Updated with AIA
            </h2>
            <p class="text-xl text-indigo-100 mb-8">
                Get the latest automation insights, tips, and updates delivered to your inbox.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" 
                       class="flex-1 px-6 py-4 rounded-xl border-0 focus:ring-2 focus:ring-indigo-500 text-gray-900">
                <button class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-colors duration-300">
                    Subscribe
                </button>
            </div>
        </div>
    </section>
</div>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes scale-in {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-slide-up {
    animation: slide-up 0.8s ease-out;
}

.animate-scale-in {
    animation: scale-in 0.6s ease-out;
}
</style>
