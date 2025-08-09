@extends('core::layouts.app')

@section('title', 'Contact Us - AIA Platform')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-neutral-50 to-primary-50 py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6">
                    Get in <span class="bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">Touch</span>
                </h1>
                <p class="text-xl text-neutral-600 max-w-2xl mx-auto">
                    Ready to transform your business with automation? Let's discuss your needs and create a custom solution.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Contact Form -->
                    <div class="p-8 lg:p-12">
                        <h2 class="text-2xl font-bold text-neutral-900 mb-6">Send us a message</h2>
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-neutral-700 mb-2">First Name</label>
                                    <input type="text" id="first_name" name="first_name" 
                                           class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-neutral-700 mb-2">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" 
                                           class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" 
                                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            
                            <div>
                                <label for="company" class="block text-sm font-medium text-neutral-700 mb-2">Company</label>
                                <input type="text" id="company" name="company" 
                                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-neutral-700 mb-2">Message</label>
                                <textarea id="message" name="message" rows="4" 
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
