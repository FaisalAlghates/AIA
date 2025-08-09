@extends('core::layouts.app')

@section('title', 'Contact Us - AIA Platform')

@section('content')
<div class="min-h-screen relative overflow-hidden">
    <!-- Hero Section -->
    <section class="relative py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-6xl md:text-8xl font-black text-white mb-8 animate-slide-up-fade">
                    Get in <span class="text-gradient-primary animate-text-shimmer">Touch</span>
                </h1>
                <p class="text-xl text-white/80 max-w-4xl mx-auto leading-relaxed animate-slide-up-fade delay-200">
                    Ready to transform your business with next-generation automation? Let's discuss your vision and create a revolutionary solution together.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="relative py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="glass-card p-8 lg:p-12 hover-lift animate-slide-up-fade delay-300">
                    <h2 class="text-3xl font-black text-white mb-8">
                        Send us a <span class="text-gradient-secondary">Message</span>
                    </h2>
                    
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-bold text-white/80 mb-3">First Name</label>
                                <input type="text" id="first_name" name="first_name" 
                                       class="w-full px-4 py-4 glass rounded-xl text-white placeholder-white/50 focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300"
                                       placeholder="Enter your first name">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-bold text-white/80 mb-3">Last Name</label>
                                <input type="text" id="last_name" name="last_name" 
                                       class="w-full px-4 py-4 glass rounded-xl text-white placeholder-white/50 focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300"
                                       placeholder="Enter your last name">
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-bold text-white/80 mb-3">Email</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-4 glass rounded-xl text-white placeholder-white/50 focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300"
                                   placeholder="your.email@company.com">
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-bold text-white/80 mb-3">Company</label>
                            <input type="text" id="company" name="company" 
                                   class="w-full px-4 py-4 glass rounded-xl text-white placeholder-white/50 focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300"
                                   placeholder="Your company name">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-bold text-white/80 mb-3">Subject</label>
                            <select id="subject" name="subject" 
                                    class="w-full px-4 py-4 glass rounded-xl text-white focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300">
                                <option value="" class="bg-gray-800">Select a topic</option>
                                <option value="automation" class="bg-gray-800">Process Automation</option>
                                <option value="ai" class="bg-gray-800">AI Integration</option>
                                <option value="consulting" class="bg-gray-800">Consulting Services</option>
                                <option value="support" class="bg-gray-800">Technical Support</option>
                                <option value="partnership" class="bg-gray-800">Partnership</option>
                                <option value="other" class="bg-gray-800">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-bold text-white/80 mb-3">Message</label>
                            <textarea id="message" name="message" rows="6" 
                                      class="w-full px-4 py-4 glass rounded-xl text-white placeholder-white/50 focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300 resize-none"
                                      placeholder="Tell us about your automation needs and goals..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full btn-modern text-white group">
                            <span class="relative z-10">Send Message</span>
                            <svg class="relative z-10 ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-8 animate-slide-up-fade delay-500">
                    <!-- Contact Details -->
                    <div class="glass-card p-8 hover-lift">
                        <h3 class="text-2xl font-bold text-white mb-6">
                            Contact <span class="text-gradient-accent">Information</span>
                        </h3>
                        
                        <div class="space-y-6">
                            @php
                                $contactInfo = [
                                    [
                                        'icon' => 'M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                                        'title' => 'Email',
                                        'value' => 'hello@aia-platform.com',
                                        'gradient' => 'from-blue-500 to-purple-600'
                                    ],
                                    [
                                        'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                                        'title' => 'Phone',
                                        'value' => '+1 (555) 123-4567',
                                        'gradient' => 'from-purple-500 to-pink-600'
                                    ],
                                    [
                                        'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                                        'title' => 'Address',
                                        'value' => '123 Innovation Drive, Tech City, TC 12345',
                                        'gradient' => 'from-cyan-500 to-blue-600'
                                    ]
                                ];
                            @endphp
                            
                            @foreach($contactInfo as $info)
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-12 h-12 bg-gradient-to-br {{ $info['gradient'] }} rounded-xl flex items-center justify-center animate-pulse-glow">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $info['icon'] }}"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">{{ $info['title'] }}</h4>
                                        <p class="text-white/70">{{ $info['value'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="glass-card p-8 hover-lift">
                        <h3 class="text-2xl font-bold text-white mb-6">
                            Business <span class="text-gradient-primary">Hours</span>
                        </h3>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-white/80">Monday - Friday</span>
                                <span class="text-white font-semibold">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-white/80">Saturday</span>
                                <span class="text-white font-semibold">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-white/80">Sunday</span>
                                <span class="text-white/60">Closed</span>
                            </div>
                            <div class="pt-3 border-t border-white/10">
                                <div class="flex justify-between items-center">
                                    <span class="text-white/80">Emergency Support</span>
                                    <span class="text-gradient-accent font-semibold">24/7 Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="glass-card p-8 hover-lift">
                        <h3 class="text-2xl font-bold text-white mb-6">
                            Follow <span class="text-gradient-secondary">Us</span>
                        </h3>
                        
                        <div class="flex space-x-4">
                            @php
                                $socialLinks = ['twitter', 'linkedin', 'github', 'youtube'];
                                $gradients = [
                                    'from-blue-500 to-purple-600',
                                    'from-purple-500 to-pink-600',
                                    'from-gray-600 to-gray-800',
                                    'from-red-500 to-red-600'
                                ];
                            @endphp
                            
                            @foreach($socialLinks as $index => $social)
                                <a href="#" class="p-3 bg-gradient-to-br {{ $gradients[$index] }} rounded-xl text-white hover-glow transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045"/>
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 
                                          class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"></textarea>
                            </div>
                            
                            <button type="submit" 
                                    class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors duration-200">
                                Send Message
                            </button>
                        </form>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="bg-gradient-to-br from-primary-600 to-secondary-600 p-8 lg:p-12 text-white">
                        <h2 class="text-2xl font-bold mb-6">Contact Information</h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-white bg-opacity-20 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h3 class="font-semibold mb-1">Address</h3>
                                    <p class="text-primary-100">123 Business Street<br>Tech City, TC 12345</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-white bg-opacity-20 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h3 class="font-semibold mb-1">Phone</h3>
                                    <p class="text-primary-100">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-white bg-opacity-20 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h3 class="font-semibold mb-1">Email</h3>
                                    <p class="text-primary-100">hello@aia.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-white bg-opacity-20 rounded-full flex-shrink-0 mt-1"></div>
                                <div>
                                    <h3 class="font-semibold mb-1">Business Hours</h3>
                                    <p class="text-primary-100">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
