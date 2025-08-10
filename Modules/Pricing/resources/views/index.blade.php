@extends('core::layouts.app')

@section('title', 'Pricing Plans - AIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-blue-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-2000ms"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-cyan-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-4000ms"></div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-20 w-2 h-2 bg-white/30 rounded-full animate-float"></div>
            <div class="absolute top-40 right-40 w-3 h-3 bg-purple-400/40 rounded-full animate-float animation-delay-1000ms"></div>
            <div class="absolute bottom-20 right-20 w-2 h-2 bg-blue-400/40 rounded-full animate-float animation-delay-2000ms"></div>
            <div class="absolute bottom-40 left-40 w-3 h-3 bg-cyan-400/40 rounded-full animate-float animation-delay-3000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-32">
            <div class="text-center mb-20">
                <!-- Logo/Icon -->
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Choose Your <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Plan</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-white/80 mb-16 max-w-3xl mx-auto font-medium">
                    Unlock the full potential of AI automation with flexible pricing plans designed for businesses of all sizes.
                    Start your transformation journey today with no setup fees or hidden costs.
                </p>

                <!-- Plan Toggle -->
                <div class="flex justify-center mb-16">
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-2 flex items-center">
                        <button id="monthly-toggle" class="px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-purple-600">
                            Monthly
                        </button>
                        <button id="yearly-toggle" class="px-8 py-3 rounded-xl text-white/80 font-semibold transition-all duration-300 hover:text-white">
                            Yearly
                            <span class="ml-2 px-2 py-1 bg-green-500 text-white text-xs rounded-full">Save 20%</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl opacity-70 animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Starter Plan -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-cyan-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-white mb-4">Starter</h3>
                            <div class="flex items-center justify-center mb-6">
                                <span class="text-5xl font-black text-white monthly-price">$29</span>
                                <span class="text-5xl font-black text-white yearly-price hidden">$23</span>
                                <span class="text-white/60 ml-2">/month</span>
                            </div>
                            <p class="text-white/80">Perfect for small businesses starting their automation journey</p>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Up to 5 automated workflows
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                1,000 API calls/month
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Basic analytics dashboard
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Email support
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Standard integrations
                            </li>
                        </ul>

                        <button class="w-full py-4 bg-gradient-to-r from-blue-500 to-cyan-600 text-white font-bold rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            Get Started
                        </button>
                    </div>
                </div>

                <!-- Professional Plan (Most Popular) -->
                <div class="group relative backdrop-blur-xl bg-white/10 border-2 border-purple-500/50 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-500ms">
                    <!-- Popular Badge -->
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-to-r from-purple-500 to-pink-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-2xl">
                            Most Popular
                        </span>
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="text-center mb-8 mt-4">
                            <h3 class="text-2xl font-bold text-white mb-4">Professional</h3>
                            <div class="flex items-center justify-center mb-6">
                                <span class="text-5xl font-black text-white monthly-price">$79</span>
                                <span class="text-5xl font-black text-white yearly-price hidden">$63</span>
                                <span class="text-white/60 ml-2">/month</span>
                            </div>
                            <p class="text-white/80">Ideal for growing businesses ready to scale automation</p>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Up to 25 automated workflows
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                10,000 API calls/month
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Advanced analytics & insights
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Priority chat & phone support
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Premium integrations
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Custom AI models
                            </li>
                        </ul>

                        <button class="w-full py-4 bg-gradient-to-r from-purple-500 to-pink-600 text-white font-bold rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            Start Professional
                        </button>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-8 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    
                    <div class="relative">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-white mb-4">Enterprise</h3>
                            <div class="flex items-center justify-center mb-6">
                                <span class="text-5xl font-black text-white">Custom</span>
                            </div>
                            <p class="text-white/80">Tailored solutions for large organizations</p>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Unlimited workflows
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Unlimited API calls
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Enterprise analytics suite
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Dedicated account manager
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Custom integrations & APIs
                            </li>
                            <li class="flex items-center text-white/90">
                                <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                SLA guarantees
                            </li>
                        </ul>

                        <button class="w-full py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-bold rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            Contact Sales
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Comparison -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Compare <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Features</span>
                </h2>
                <p class="text-xl text-white/80 max-w-3xl mx-auto font-medium">
                    See what's included in each plan and choose the perfect fit for your business needs.
                </p>
            </div>

            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-white/5">
                            <tr>
                                <th class="px-6 py-4 text-left text-white font-bold">Features</th>
                                <th class="px-6 py-4 text-center text-white font-bold">Starter</th>
                                <th class="px-6 py-4 text-center text-white font-bold">Professional</th>
                                <th class="px-6 py-4 text-center text-white font-bold">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10">
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4 text-white/90">Automated Workflows</td>
                                <td class="px-6 py-4 text-center text-white/80">5</td>
                                <td class="px-6 py-4 text-center text-white/80">25</td>
                                <td class="px-6 py-4 text-center text-white/80">Unlimited</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4 text-white/90">API Calls/Month</td>
                                <td class="px-6 py-4 text-center text-white/80">1,000</td>
                                <td class="px-6 py-4 text-center text-white/80">10,000</td>
                                <td class="px-6 py-4 text-center text-white/80">Unlimited</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4 text-white/90">AI Models</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-red-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-green-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-green-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4 text-white/90">Priority Support</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-red-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-green-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-green-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="hover:bg-white/5 transition-colors duration-300">
                                <td class="px-6 py-4 text-white/90">Custom Integrations</td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-red-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-yellow-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                    </svg>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <svg class="w-5 h-5 text-green-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-black to-gray-900"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Frequently Asked <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Questions</span>
                </h2>
            </div>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 hover:bg-white/20 transition-all duration-300">
                    <button class="w-full text-left flex justify-between items-center" onclick="toggleFAQ(1)">
                        <h3 class="text-xl font-bold text-white">Can I change my plan anytime?</h3>
                        <svg id="faq-icon-1" class="w-6 h-6 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-1" class="hidden mt-4 text-white/80">
                        Yes! You can upgrade or downgrade your plan at any time. Changes take effect immediately, and we'll prorate any billing adjustments.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 hover:bg-white/20 transition-all duration-300">
                    <button class="w-full text-left flex justify-between items-center" onclick="toggleFAQ(2)">
                        <h3 class="text-xl font-bold text-white">Is there a free trial available?</h3>
                        <svg id="faq-icon-2" class="w-6 h-6 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-2" class="hidden mt-4 text-white/80">
                        Absolutely! We offer a 14-day free trial for all new users. No credit card required to get started.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 hover:bg-white/20 transition-all duration-300">
                    <button class="w-full text-left flex justify-between items-center" onclick="toggleFAQ(3)">
                        <h3 class="text-xl font-bold text-white">What happens if I exceed my API limits?</h3>
                        <svg id="faq-icon-3" class="w-6 h-6 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-3" class="hidden mt-4 text-white/80">
                        We'll notify you when you're approaching your limits. You can purchase additional API calls or upgrade to a higher plan.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 hover:bg-white/20 transition-all duration-300">
                    <button class="w-full text-left flex justify-between items-center" onclick="toggleFAQ(4)">
                        <h3 class="text-xl font-bold text-white">Do you offer custom enterprise solutions?</h3>
                        <svg id="faq-icon-4" class="w-6 h-6 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-4" class="hidden mt-4 text-white/80">
                        Yes! Our Enterprise plan includes custom solutions, dedicated support, and tailored integrations. Contact our sales team for details.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-400/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-400/20 rounded-full filter blur-3xl animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                Ready to <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Get Started</span>?
            </h2>
            <p class="text-xl text-white/80 mb-16 max-w-2xl mx-auto font-medium">
                Join thousands of companies already automating their workflows. Start your free trial today and experience the power of AI automation.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('contact.index') }}" 
                   class="group relative px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10">Start Free Trial</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('services.index') }}" 
                   class="px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">
                    View All Features
                </a>
            </div>
        </div>
    </section>

    <script>
        // Plan Toggle Functionality
        document.getElementById('monthly-toggle').addEventListener('click', function() {
            showMonthlyPrices();
            setActiveToggle('monthly');
        });

        document.getElementById('yearly-toggle').addEventListener('click', function() {
            showYearlyPrices();
            setActiveToggle('yearly');
        });

        function showMonthlyPrices() {
            document.querySelectorAll('.monthly-price').forEach(el => el.classList.remove('hidden'));
            document.querySelectorAll('.yearly-price').forEach(el => el.classList.add('hidden'));
        }

        function showYearlyPrices() {
            document.querySelectorAll('.monthly-price').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.yearly-price').forEach(el => el.classList.remove('hidden'));
        }

        function setActiveToggle(type) {
            const monthlyBtn = document.getElementById('monthly-toggle');
            const yearlyBtn = document.getElementById('yearly-toggle');
            
            if (type === 'monthly') {
                monthlyBtn.className = 'px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-purple-600';
                yearlyBtn.className = 'px-8 py-3 rounded-xl text-white/80 font-semibold transition-all duration-300 hover:text-white';
            } else {
                yearlyBtn.className = 'px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-purple-600';
                monthlyBtn.className = 'px-8 py-3 rounded-xl text-white/80 font-semibold transition-all duration-300 hover:text-white';
            }
        }

        // FAQ Toggle Functionality
        function toggleFAQ(num) {
            const content = document.getElementById(`faq-content-${num}`);
            const icon = document.getElementById(`faq-icon-${num}`);
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
@endsection
