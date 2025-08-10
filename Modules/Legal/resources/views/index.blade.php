@extends('core::layouts.app')

@section('title', 'Legal & Privacy - AIA')

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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Legal & <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Privacy</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl text-white/80 mb-16 max-w-3xl mx-auto font-medium">
                    Your privacy and security are our top priorities. Learn about our commitment to protecting your data, 
                    our terms of service, and the legal framework that governs our AI automation platform.
                </p>

                <!-- Quick Navigation -->
                <div class="flex flex-wrap justify-center gap-4 mb-16">
                    <a href="#privacy-policy" class="px-8 py-3 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-semibold rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105">
                        Privacy Policy
                    </a>
                    <a href="#terms-of-service" class="px-8 py-3 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-semibold rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105">
                        Terms of Service
                    </a>
                    <a href="#cookie-policy" class="px-8 py-3 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-semibold rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105">
                        Cookie Policy
                    </a>
                    <a href="#gdpr-compliance" class="px-8 py-3 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-semibold rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105">
                        GDPR Compliance
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-6 rounded-3xl shadow-2xl animate-float">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500/20 to-emerald-600/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">GDPR Compliant</h3>
                            <p class="text-white/80 text-sm">Full compliance with European data protection regulations</p>
                        </div>
                    </div>

                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-6 rounded-3xl shadow-2xl animate-float animation-delay-500ms">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Enterprise Security</h3>
                            <p class="text-white/80 text-sm">Bank-grade encryption and security protocols</p>
                        </div>
                    </div>

                    <div class="group relative backdrop-blur-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 p-6 rounded-3xl shadow-2xl animate-float animation-delay-1000ms">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Transparent Terms</h3>
                            <p class="text-white/80 text-sm">Clear, simple language with no hidden clauses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Section -->
    <section id="privacy-policy" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Privacy <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Policy</span>
                </h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Learn how we collect, use, and protect your personal information
                </p>
            </div>

            <div class="space-y-8">
                <!-- Data Collection -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        Data Collection
                    </h3>
                    <div class="text-white/80 space-y-4">
                        <p>We collect information that you provide directly to us, such as:</p>
                        <ul class="list-disc ml-6 space-y-2">
                            <li>Account registration information (name, email, company details)</li>
                            <li>Payment and billing information</li>
                            <li>Communications with our support team</li>
                            <li>Usage data and analytics from your automation workflows</li>
                        </ul>
                        <p>We use this information to provide our services, improve user experience, and ensure platform security.</p>
                    </div>
                </div>

                <!-- Data Usage -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        How We Use Your Data
                    </h3>
                    <div class="text-white/80 space-y-4">
                        <p>Your data is used exclusively for:</p>
                        <ul class="list-disc ml-6 space-y-2">
                            <li>Providing and maintaining our automation services</li>
                            <li>Processing payments and managing your account</li>
                            <li>Communicating updates, security alerts, and support</li>
                            <li>Improving our AI models and platform performance</li>
                            <li>Ensuring compliance with legal obligations</li>
                        </ul>
                        <p><strong>We never sell your data</strong> to third parties or use it for advertising purposes.</p>
                    </div>
                </div>

                <!-- Data Protection -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        Data Protection
                    </h3>
                    <div class="text-white/80 space-y-4">
                        <p>We implement industry-leading security measures:</p>
                        <ul class="list-disc ml-6 space-y-2">
                            <li>End-to-end encryption for all data transmission</li>
                            <li>Regular security audits and penetration testing</li>
                            <li>Multi-factor authentication and access controls</li>
                            <li>GDPR-compliant data processing and storage</li>
                            <li>Automatic data backup and disaster recovery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms of Service Section -->
    <section id="terms-of-service" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Terms of <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Service</span>
                </h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Clear guidelines for using our AI automation platform
                </p>
            </div>

            <div class="space-y-8">
                <!-- Service Usage -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Service Usage
                    </h3>
                    <div class="text-white/80 space-y-4">
                        <p>By using AIA's automation platform, you agree to:</p>
                        <ul class="list-disc ml-6 space-y-2">
                            <li>Use our services for lawful business purposes only</li>
                            <li>Maintain the security of your account credentials</li>
                            <li>Comply with all applicable laws and regulations</li>
                            <li>Respect intellectual property rights</li>
                            <li>Not attempt to reverse engineer our AI models</li>
                        </ul>
                    </div>
                </div>

                <!-- Subscription & Billing -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                        Subscription & Billing
                    </h3>
                    <div class="text-white/80 space-y-4">
                        <ul class="list-disc ml-6 space-y-2">
                            <li>Subscriptions are billed monthly or annually as selected</li>
                            <li>You can cancel your subscription at any time</li>
                            <li>Refunds are processed according to our refund policy</li>
                            <li>Price changes will be communicated 30 days in advance</li>
                            <li>Late payments may result in service suspension</li>
                        </ul>
                    </div>
                </div>

                <!-- Limitation of Liability -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-orange-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        Limitation of Liability
                    </h3>
                    <div class="text-white/80 space-y-4">
                        <p>Our liability is limited to the maximum extent permitted by law. We provide our services "as is" and make no warranties regarding:</p>
                        <ul class="list-disc ml-6 space-y-2">
                            <li>Uninterrupted or error-free operation</li>
                            <li>Specific results from automation workflows</li>
                            <li>Compatibility with third-party services</li>
                            <li>Data accuracy from external sources</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cookie Policy Section -->
    <section id="cookie-policy" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-black to-gray-900"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    Cookie <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Policy</span>
                </h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    How we use cookies to enhance your experience
                </p>
            </div>

            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8">
                <div class="text-white/80 space-y-6">
                    <p class="text-lg">We use cookies and similar technologies to provide and improve our services. Here's what you need to know:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <h4 class="text-xl font-bold text-white">Essential Cookies</h4>
                            <ul class="list-disc ml-6 space-y-2">
                                <li>Authentication and security</li>
                                <li>Session management</li>
                                <li>Platform functionality</li>
                            </ul>
                        </div>
                        
                        <div class="space-y-4">
                            <h4 class="text-xl font-bold text-white">Analytics Cookies</h4>
                            <ul class="list-disc ml-6 space-y-2">
                                <li>Usage statistics</li>
                                <li>Performance monitoring</li>
                                <li>Feature optimization</li>
                            </ul>
                        </div>
                    </div>
                    
                    <p>You can control cookie preferences through your browser settings. Note that disabling certain cookies may limit platform functionality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GDPR Compliance Section -->
    <section id="gdpr-compliance" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                    GDPR <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Compliance</span>
                </h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Your rights under European data protection law
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Your Rights -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Your Rights
                    </h3>
                    <div class="text-white/80 space-y-3">
                        <ul class="list-disc ml-6 space-y-2 text-sm">
                            <li>Right to access your data</li>
                            <li>Right to data portability</li>
                            <li>Right to rectification</li>
                            <li>Right to erasure</li>
                            <li>Right to restrict processing</li>
                            <li>Right to withdraw consent</li>
                        </ul>
                    </div>
                </div>

                <!-- How to Exercise Rights -->
                <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 hover:bg-white/20 transition-all duration-300">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <svg class="w-8 h-8 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Exercise Your Rights
                    </h3>
                    <div class="text-white/80 space-y-3">
                        <p class="text-sm">Contact our Data Protection Officer:</p>
                        <ul class="list-disc ml-6 space-y-2 text-sm">
                            <li>Email: dpo@aiaplatform.com</li>
                            <li>Response time: 30 days maximum</li>
                            <li>Identity verification required</li>
                            <li>Free of charge</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-400/20 rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-400/20 rounded-full filter blur-3xl animate-pulse animation-delay-2000ms"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8">
                Questions About <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Legal</span>?
            </h2>
            <p class="text-xl text-white/80 mb-16 max-w-2xl mx-auto font-medium">
                Our legal team is here to help. Contact us for any questions about privacy, terms, or compliance.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <a href="mailto:legal@aiaplatform.com" 
                   class="group relative px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden">
                    <span class="relative z-10">Contact Legal Team</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('contact.index') }}" 
                   class="px-12 py-5 backdrop-blur-xl bg-white/10 border border-white/20 text-white font-bold text-lg rounded-2xl transition-all duration-300 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">
                    General Support
                </a>
            </div>

            <!-- Last Updated -->
            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6">
                <p class="text-white/60 text-sm">
                    <strong>Last Updated:</strong> August 9, 2025
                    <br>
                    <strong>Effective Date:</strong> August 9, 2025
                    <br>
                    We may update these policies from time to time. We'll notify you of any significant changes.
                </p>
            </div>
        </div>
    </section>
@endsection
