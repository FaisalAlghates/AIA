@extends('core::layouts.app')

@section('title', 'Automation Hub - AIA Platform')

@section('content')
<div class="min-h-screen relative overflow-hidden" x-data="automationHub()">
    
    <!-- Search and Filter -->
    <section class="relative py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card p-8 mb-12 animate-slide-up-fade delay-300">
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Search Input -->
                    <div class="flex-1">
                        <div class="relative">
                            <input type="text" 
                                   x-model="searchQuery"
                                   @input="filterTemplates()"
                                   placeholder="Search automation templates..." 
                                   class="w-full px-6 py-4 glass rounded-xl text-white placeholder-white/50 focus:ring-2 focus:ring-blue-500 border-0 transition-all duration-300 pr-12">
                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Category Filters -->
                    <div class="flex flex-wrap gap-3">
                        <template x-for="category in categories" :key="category.name">
                            <button @click="setActiveCategory(category.name)"
                                    :class="category.active ? 
                                        'bg-gradient-to-r ' + category.gradient + ' text-white' : 
                                        'glass text-white/70 hover:text-white hover:bg-white/20'"
                                    class="px-6 py-3 rounded-xl font-semibold transition-all duration-300"
                                    x-text="category.name">
                            </button>
                        </template>
                    </div>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8 pt-8 border-t border-white/10">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2" x-text="filteredTemplates.length"></div>
                        <div class="text-white/70 text-sm">Available Templates</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">50K+</div>
                        <div class="text-white/70 text-sm">Successful Downloads</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">4.8</div>
                        <div class="text-white/70 text-sm">Average Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">24/7</div>
                        <div class="text-white/70 text-sm">Technical Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Template Gallery -->
    <section class="relative py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Loading State -->
            <div x-show="loading" class="text-center py-20">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-white"></div>
                <p class="text-white/80 mt-4">Loading templates...</p>
            </div>
            
            <!-- No Results -->
            <div x-show="!loading && filteredTemplates.length === 0" class="text-center py-20">
                <div class="text-6xl mb-4">🔍</div>
                <h3 class="text-2xl font-bold text-white mb-4">No Results Found</h3>
                <p class="text-white/70">Try changing your search term or category</p>
            </div>
            
            <!-- Templates Grid -->
            <div x-show="!loading && filteredTemplates.length > 0" 
                 class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="(template, index) in filteredTemplates" :key="template.id">
                    <div class="group glass-card p-8 hover-lift animate-slide-up-fade" 
                         :style="'animation-delay: ' + (0.1 * index) + 's'">
                        
                        <!-- Header Image/Icon Area -->
                        <div class="relative mb-6 h-48 rounded-2xl flex items-center justify-center overflow-hidden"
                             :class="'bg-gradient-to-br ' + template.gradient">
                            <span class="text-6xl" x-text="template.icon"></span>
                            
                            <!-- Animated Background -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-4 right-4 w-16 h-16 bg-white/20 rounded-full blur-xl animate-floating-particles"></div>
                                <div class="absolute bottom-6 left-6 w-12 h-12 bg-white/10 rounded-full blur-lg animate-floating-particles delay-1000"></div>
                            </div>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 glass rounded-full text-white text-sm font-semibold"
                                      x-text="template.category"></span>
                            </div>
                            
                            <!-- Rating -->
                            <div class="absolute top-4 right-4 flex items-center space-x-1">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L0 6.91l6.564-.955L10 0l3.436 5.955L20 6.91l-5.245 4.635L15.878 18z"/>
                                </svg>
                                <span class="text-white text-sm font-bold" x-text="template.rating"></span>
                            </div>
                            
                            <!-- Favorite Button -->
                            <button @click="toggleFavorite(template.id)" 
                                    class="absolute bottom-4 right-4 p-2 glass rounded-full hover:bg-white/20 transition-all duration-300">
                                <svg class="w-5 h-5" :class="template.favorite ? 'text-red-400 fill-current' : 'text-white/70'" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-gradient-primary transition-all duration-300"
                                x-text="template.title"></h3>
                            <p class="text-white/80 leading-relaxed text-sm"
                               x-text="template.description"></p>
                            
                            <!-- Features -->
                            <div class="mb-6">
                                <div class="grid grid-cols-2 gap-2">
                                    <template x-for="feature in template.features" :key="feature">
                                        <div class="flex items-center text-sm text-white/70">
                                            <div class="w-1.5 h-1.5 rounded-full mr-2"
                                                 :class="'bg-gradient-to-r ' + template.gradient"></div>
                                            <span x-text="feature"></span>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <!-- Stats -->
                            <div class="flex items-center justify-between pt-4 border-t border-white/10">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0-6V4m0 6l4.5 4.5M12 10L7.5 14.5"></path>
                                        </svg>
                                        <span class="text-white/70 text-sm" x-text="template.downloads"></span>
                                    </div>
                                </div>
                                
                                <div class="flex space-x-2">
                                    <button @click="previewTemplate(template)" 
                                            class="p-2 glass rounded-lg text-white/70 hover:text-white transition-colors hover-glow">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button @click="useTemplate(template)" 
                                            class="px-4 py-2 text-white text-sm font-semibold rounded-lg hover:scale-105 transition-transform duration-300"
                                            :class="'bg-gradient-to-r ' + template.gradient">
                                        Use Template
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Particles -->
                        <div class="absolute top-6 right-6 w-1 h-1 bg-white/30 rounded-full animate-floating-particles" 
                             :style="'animation-delay: ' + (1 + 0.3 * index) + 's'"></div>
                    </div>
                </template>
            </div>
            
            <!-- Load More Button -->
            <div x-show="!loading && filteredTemplates.length > 0" class="text-center mt-12">
                <button @click="loadMoreTemplates()" 
                        class="btn-glass text-white px-8 py-4">
                    Load More Templates
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    
    <!-- Template Preview Modal -->
    <div x-show="showPreview" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-4"
         @click.self="closePreview()">
        
        <div x-show="showPreview"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="glass-card max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-2" x-text="selectedTemplate?.title"></h2>
                        <p class="text-white/70" x-text="selectedTemplate?.category"></p>
                    </div>
                    <button @click="closePreview()" 
                            class="p-2 glass rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <div class="h-64 rounded-2xl mb-6 flex items-center justify-center"
                             :class="'bg-gradient-to-br ' + (selectedTemplate?.gradient || 'from-blue-500 to-purple-600')">
                            <span class="text-8xl" x-text="selectedTemplate?.icon"></span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-white mb-4">Key Features</h3>
                        <div class="space-y-2">
                            <template x-for="feature in selectedTemplate?.features || []" :key="feature">
                                <div class="flex items-center text-white/80">
                                    <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span x-text="feature"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold text-white mb-4">Detailed Description</h3>
                        <p class="text-white/80 leading-relaxed mb-6" x-text="selectedTemplate?.description"></p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="glass p-4 rounded-xl">
                                <div class="text-2xl font-bold text-white" x-text="selectedTemplate?.rating"></div>
                                <div class="text-white/70 text-sm">Rating</div>
                            </div>
                            <div class="glass p-4 rounded-xl">
                                <div class="text-2xl font-bold text-white" x-text="selectedTemplate?.downloads"></div>
                                <div class="text-white/70 text-sm">Downloads</div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-4">
                            <button @click="useTemplate(selectedTemplate)" 
                                    class="flex-1 px-6 py-3 text-white font-semibold rounded-xl hover:scale-105 transition-transform duration-300"
                                    :class="'bg-gradient-to-r ' + (selectedTemplate?.gradient || 'from-blue-500 to-purple-600')">
                                Use Template Now
                            </button>
                            <button @click="downloadTemplate(selectedTemplate)" 
                                    class="px-6 py-3 glass text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300">
                                Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Success/Error Messages -->
    <div x-show="showMessage" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="fixed bottom-8 right-8 z-50">
        <div class="glass-card p-4 flex items-center space-x-3"
             :class="messageType === 'success' ? 'border-green-500' : 'border-red-500'">
            <svg x-show="messageType === 'success'" class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <svg x-show="messageType === 'error'" class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            <span class="text-white font-medium" x-text="message"></span>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function automationHub() {
    return {
        searchQuery: '',
        loading: false,
        showPreview: false,
        selectedTemplate: null,
        showMessage: false,
        message: '',
        messageType: 'success',
        
        categories: [
            { name: 'All', active: true, gradient: 'from-blue-500 to-purple-600' },
            { name: 'Customer Management', active: false, gradient: 'from-purple-500 to-pink-600' },
            { name: 'Finance', active: false, gradient: 'from-green-500 to-cyan-600' },
            { name: 'Human Resources', active: false, gradient: 'from-orange-500 to-red-600' },
            { name: 'Marketing', active: false, gradient: 'from-pink-500 to-purple-600' },
            { name: 'Technical Support', active: false, gradient: 'from-cyan-500 to-blue-600' }
        ],
        
        templates: [
            {
                id: 1,
                title: 'Customer Onboarding System',
                description: 'Automate the entire new customer onboarding process with identity verification and personalized welcome',
                category: 'Customer Management',
                rating: 4.9,
                downloads: '12K+',
                gradient: 'from-blue-500 to-purple-600',
                icon: '👥',
                favorite: false,
                features: ['Automatic Verification', 'Welcome Messages', 'Progress Tracking', 'Detailed Reports']
            },
            {
                id: 2,
                title: 'Invoice Processing System',
                description: 'Streamline invoice management with OCR reading, automatic approval, and payment tracking',
                category: 'Finance',
                rating: 4.8,
                downloads: '8.5K+',
                gradient: 'from-green-500 to-cyan-600',
                icon: '💰',
                favorite: false,
                features: ['OCR Reading', 'Auto Approval', 'Payment Tracking', 'Financial Reports']
            },
            {
                id: 3,
                title: 'Recruitment Pipeline',
                description: 'Optimize recruitment with candidate screening, interview scheduling, and background checks',
                category: 'Human Resources',
                rating: 4.7,
                downloads: '6.2K+',
                gradient: 'from-orange-500 to-red-600',
                icon: '🎯',
                favorite: false,
                features: ['Candidate Screening', 'Interview Scheduling', 'Background Check', 'Skills Assessment']
            },
            {
                id: 4,
                title: 'Social Media Campaign Manager',
                description: 'Create, schedule, and analyze social media campaigns with AI-powered insights',
                category: 'Marketing',
                rating: 4.9,
                downloads: '15K+',
                gradient: 'from-pink-500 to-purple-600',
                icon: '📱',
                favorite: false,
                features: ['Post Scheduling', 'Data Analytics', 'AI Insights', 'Performance Reports']
            },
            {
                id: 5,
                title: 'Customer Support Ticket Router',
                description: 'Intelligent ticket routing and prioritization with sentiment analysis and automated responses',
                category: 'Technical Support',
                rating: 4.6,
                downloads: '9.8K+',
                gradient: 'from-cyan-500 to-blue-600',
                icon: '🎧',
                favorite: false,
                features: ['Smart Routing', 'Sentiment Analysis', 'Auto Responses', 'Status Tracking']
            },
            {
                id: 6,
                title: 'Lead Qualification Engine',
                description: 'Automatically score and qualify leads using machine learning and behavioral analysis',
                category: 'Customer Management',
                rating: 4.8,
                downloads: '11K+',
                gradient: 'from-purple-500 to-pink-600',
                icon: '🚀',
                favorite: false,
                features: ['Lead Scoring', 'Behavioral Analysis', 'Machine Learning', 'Detailed Reports']
            },
            {
                id: 7,
                title: 'Smart Inventory Management',
                description: 'Intelligent inventory management with level tracking, demand forecasting, and auto-reordering',
                category: 'Finance',
                rating: 4.7,
                downloads: '7.3K+',
                gradient: 'from-emerald-500 to-teal-600',
                icon: '📦',
                favorite: false,
                features: ['Level Tracking', 'Demand Forecasting', 'Auto Reordering', 'Inventory Reports']
            },
            {
                id: 8,
                title: 'Smart Recruitment Assistant',
                description: 'Intelligent recruitment assistant that screens resumes, schedules interviews, and evaluates candidates',
                category: 'Human Resources',
                rating: 4.8,
                downloads: '9.1K+',
                gradient: 'from-violet-500 to-purple-600',
                icon: '🤖',
                favorite: false,
                features: ['Resume Screening', 'Smart Scheduling', 'Skills Assessment', 'Recruitment Reports']
            }
        ],
        
        filteredTemplates: [],
        
        init() {
            this.filteredTemplates = this.templates;
            this.loadTemplates();
        },
        
        async loadTemplates() {
            try {
                this.loading = true;
                const response = await fetch('/api/automation-hub/templates');
                if (response.ok) {
                    const data = await response.json();
                    this.templates = data;
                    this.filteredTemplates = data;
                }
            } catch (error) {
                console.error('Error loading templates:', error);
                // Use fallback data if API fails
            } finally {
                this.loading = false;
            }
        },
        
        setActiveCategory(categoryName) {
            this.categories.forEach(cat => {
                cat.active = cat.name === categoryName;
            });
            this.filterTemplates();
        },
        
        async filterTemplates() {
            this.loading = true;
            
            // Add a small delay for better UX
            await new Promise(resolve => setTimeout(resolve, 300));
            
            try {
                const activeCategory = this.categories.find(cat => cat.active);
                const params = new URLSearchParams();
                
                if (activeCategory.name !== 'All') {
                    params.append('category', activeCategory.name);
                }
                
                if (this.searchQuery.trim()) {
                    params.append('search', this.searchQuery.trim());
                }
                
                const response = await fetch(`/api/automation-hub/templates?${params}`);
                if (response.ok) {
                    this.filteredTemplates = await response.json();
                } else {
                    // Fallback to local filtering
                    this.filterTemplatesLocally();
                }
            } catch (error) {
                console.error('Error filtering templates:', error);
                this.filterTemplatesLocally();
            } finally {
                this.loading = false;
            }
        },
        
        filterTemplatesLocally() {
            const activeCategory = this.categories.find(cat => cat.active);
            let filtered = this.templates;
            
            if (activeCategory.name !== 'All') {
                filtered = filtered.filter(template => 
                    template.category === activeCategory.name
                );
            }
            
            if (this.searchQuery.trim()) {
                filtered = filtered.filter(template =>
                    template.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    template.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    template.category.toLowerCase().includes(this.searchQuery.toLowerCase())
                );
            }
            
            this.filteredTemplates = filtered;
        },
        
        async previewTemplate(template) {
            try {
                this.loading = true;
                const response = await fetch(`/api/automation-hub/templates/${template.id}`);
                if (response.ok) {
                    this.selectedTemplate = await response.json();
                } else {
                    this.selectedTemplate = template;
                }
                this.showPreview = true;
            } catch (error) {
                console.error('Error loading template details:', error);
                this.selectedTemplate = template;
                this.showPreview = true;
            } finally {
                this.loading = false;
            }
        },
        
        closePreview() {
            this.showPreview = false;
            this.selectedTemplate = null;
        },
        
        async useTemplate(template) {
            try {
                this.loading = true;
                const response = await fetch(`/api/automation-hub/templates/${template.id}/use`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const result = await response.json();
                
                if (response.ok && result.success) {
                    this.showMessage = true;
                    this.messageType = 'success';
                    this.message = result.message;
                    this.closePreview();
                    
                    // Simulate workflow creation
                    setTimeout(() => {
                        this.showMessage = false;
                        // You could redirect to the workflow editor here
                        // window.location.href = `/workflows/${result.workflow_id}`;
                    }, 3000);
                } else {
                    throw new Error(result.error || 'Failed to run template');
                }
            } catch (error) {
                console.error('Error using template:', error);
                this.showMessage = true;
                this.messageType = 'error';
                this.message = 'An error occurred while running the template';
                setTimeout(() => this.showMessage = false, 3000);
            } finally {
                this.loading = false;
            }
        },
        
        async downloadTemplate(template) {
            try {
                this.loading = true;
                const response = await fetch(`/api/automation-hub/templates/${template.id}/download`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const result = await response.json();
                
                if (response.ok && result.success) {
                    this.showMessage = true;
                    this.messageType = 'success';
                    this.message = result.message;
                    this.closePreview();
                    
                    // Simulate file download
                    if (result.download_url) {
                        const a = document.createElement('a');
                        a.href = result.download_url;
                        a.download = `template_${template.id}.json`;
                        a.click();
                    }
                } else {
                    throw new Error(result.error || 'Failed to download template');
                }
            } catch (error) {
                console.error('Error downloading template:', error);
                this.showMessage = true;
                this.messageType = 'error';
                this.message = 'An error occurred while downloading the template';
            } finally {
                this.loading = false;
                setTimeout(() => this.showMessage = false, 3000);
            }
        },
        
        async toggleFavorite(templateId) {
            try {
                const template = this.templates.find(t => t.id === templateId);
                if (!template) return;
                
                const newFavoriteStatus = !template.favorite;
                
                const response = await fetch(`/api/automation-hub/templates/${templateId}/favorite`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ favorite: newFavoriteStatus })
                });
                
                const result = await response.json();
                
                if (response.ok && result.success) {
                    template.favorite = newFavoriteStatus;
                    this.showMessage = true;
                    this.messageType = 'success';
                    this.message = result.message;
                    
                    setTimeout(() => {
                        this.showMessage = false;
                    }, 2000);
                } else {
                    throw new Error(result.error || 'Failed to update favorites');
                }
            } catch (error) {
                console.error('Error toggling favorite:', error);
                this.showMessage = true;
                this.messageType = 'error';
                this.message = 'An error occurred while updating favorites';
                setTimeout(() => this.showMessage = false, 2000);
            }
        },
        
        async loadMoreTemplates() {
            this.loading = true;
            
            // Simulate loading more templates
            setTimeout(() => {
                const newTemplates = [
                    {
                        id: Date.now(),
                        title: 'New Automation System',
                        description: 'New template for advanced process automation',
                        category: 'Marketing',
                        rating: 4.5,
                        downloads: '1.2K+',
                        gradient: 'from-indigo-500 to-blue-600',
                        icon: '⚡',
                        favorite: false,
                        features: ['Feature 1', 'Feature 2', 'Feature 3', 'Feature 4']
                    }
                ];
                
                this.templates = [...this.templates, ...newTemplates];
                this.filteredTemplates = [...this.filteredTemplates, ...newTemplates];
                
                this.showMessage = true;
                this.messageType = 'success';
                this.message = 'Additional templates loaded!';
                this.loading = false;
                
                setTimeout(() => {
                    this.showMessage = false;
                }, 2000);
            }, 1000);
        }
    };
}
</script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Template Gallery -->
    <section class="relative py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $templates = [
                        [
                            'title' => 'Customer Onboarding Flow',
                            'description' => 'Automate the complete customer onboarding process with AI-powered document verification and personalized welcome sequences.',
                            'category' => 'CRM',
                            'rating' => 4.9,
                            'downloads' => '12K+',
                            'gradient' => 'from-blue-500 to-purple-600',
                            'icon' => '👥'
                        ],
                        [
                            'title' => 'Invoice Processing System',
                            'description' => 'Streamline invoice management with OCR recognition, automated approval workflows, and payment tracking.',
                            'category' => 'Finance',
                            'rating' => 4.8,
                            'downloads' => '8.5K+',
                            'gradient' => 'from-green-500 to-cyan-600',
                            'icon' => '💰'
                        ],
                        [
                            'title' => 'Employee Recruitment Pipeline',
                            'description' => 'Optimize hiring with automated candidate screening, interview scheduling, and background checks.',
                            'category' => 'HR',
                            'rating' => 4.7,
                            'downloads' => '6.2K+',
                            'gradient' => 'from-orange-500 to-red-600',
                            'icon' => '🎯'
                        ],
                        [
                            'title' => 'Social Media Campaign Manager',
                            'description' => 'Create, schedule, and analyze social media campaigns across multiple platforms with AI insights.',
                            'category' => 'Marketing',
                            'rating' => 4.9,
                            'downloads' => '15K+',
                            'gradient' => 'from-pink-500 to-purple-600',
                            'icon' => '📱'
                        ],
                        [
                            'title' => 'Customer Support Ticket Router',
                            'description' => 'Intelligent ticket routing and prioritization with sentiment analysis and automated responses.',
                            'category' => 'Support',
                            'rating' => 4.6,
                            'downloads' => '9.8K+',
                            'gradient' => 'from-cyan-500 to-blue-600',
                            'icon' => '🎧'
                        ],
                        [
                            'title' => 'Sales Lead Qualification',
                            'description' => 'Automatically score and qualify leads using machine learning and behavioral analysis.',
                            'category' => 'Sales',
                            'rating' => 4.8,
                            'downloads' => '11K+',
                            'gradient' => 'from-purple-500 to-pink-600',
                            'icon' => '🚀'
                        ]
                    ];
                @endphp
                
                @foreach($templates as $index => $template)
                    <div class="group glass-card p-8 hover-lift animate-slide-up-fade" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        
                        <!-- Header Image/Icon Area -->
                        <div class="relative mb-6 h-48 rounded-2xl bg-gradient-to-br {{ $template['gradient'] }} flex items-center justify-center overflow-hidden">
                            <span class="text-6xl">{{ $template['icon'] }}</span>
                            
                            <!-- Animated Background -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-4 right-4 w-16 h-16 bg-white/20 rounded-full blur-xl animate-floating-particles"></div>
                                <div class="absolute bottom-6 left-6 w-12 h-12 bg-white/10 rounded-full blur-lg animate-floating-particles delay-1000"></div>
                            </div>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 glass rounded-full text-white text-sm font-semibold">
                                    {{ $template['category'] }}
                                </span>
                            </div>
                            
                            <!-- Rating -->
                            <div class="absolute top-4 right-4 flex items-center space-x-1">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L0 6.91l6.564-.955L10 0l3.436 5.955L20 6.91l-5.245 4.635L15.878 18z"/>
                                </svg>
                                <span class="text-white text-sm font-bold">{{ $template['rating'] }}</span>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-gradient-primary transition-all duration-300">
                                {{ $template['title'] }}
                            </h3>
                            <p class="text-white/80 leading-relaxed text-sm">
                                {{ $template['description'] }}
                            </p>
                            
                            <!-- Stats -->
                            <div class="flex items-center justify-between pt-4 border-t border-white/10">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0-6V4m0 6l4.5 4.5M12 10L7.5 14.5"></path>
                                        </svg>
                                        <span class="text-white/70 text-sm">{{ $template['downloads'] }}</span>
                                    </div>
                                </div>
                                
                                <div class="flex space-x-2">
                                    <button class="p-2 glass rounded-lg text-white/70 hover:text-white transition-colors hover-glow">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="px-4 py-2 bg-gradient-to-r {{ $template['gradient'] }} text-white text-sm font-semibold rounded-lg hover:scale-105 transition-transform duration-300">
                                        Use Template
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Particles -->
                        <div class="absolute top-6 right-6 w-1 h-1 bg-white/30 rounded-full animate-floating-particles" style="animation-delay: {{ 1 + 0.3 * $index }}s"></div>
                    </div>
                @endforeach
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="btn-glass text-white px-8 py-4">
                    Load More Templates
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>
</div>

<script>
function automationHub() {
    return {
        searchQuery: '',
        selectedCategory: 'All',
        loading: false,
        showPreview: false,
        selectedTemplate: null,
        templates: [
            {
                id: 1,
                title: 'Customer Onboarding Flow',
                titleEn: 'Customer Onboarding Flow',
                description: 'Automate complete new customer onboarding process with AI-powered document verification and personalized welcome sequences.',
                category: 'CRM',
                rating: 4.9,
                downloads: '12K+',
                gradient: 'from-blue-500 to-purple-600',
                icon: '👥',
                features: ['Workflow Design', 'Task Scheduling', 'Real-time Monitoring', 'Smart Triggers'],
                complexity: 'Medium',
                estimatedTime: '2-3 hours',
                isPopular: true,
                isFavorite: false
            },
            {
                id: 2,
                title: 'Invoice Processing System',
                titleEn: 'Invoice Processing System',
                description: 'Streamline invoice management with OCR recognition, automated approval workflows, and payment tracking.',
                category: 'Finance',
                rating: 4.8,
                downloads: '8.5K+',
                gradient: 'from-green-500 to-cyan-600',
                icon: '💰',
                features: ['Invoice OCR', 'Auto Approval', 'Payment Tracking', 'Financial Reports'],
                complexity: 'Advanced',
                estimatedTime: '4-5 hours',
                isPopular: true,
                isFavorite: false
            },
            {
                id: 3,
                title: 'Employee Recruitment Pipeline',
                titleEn: 'Employee Recruitment Pipeline',
                description: 'Optimize recruitment process with automated candidate screening, interview scheduling, and background verification.',
                category: 'Human Resources',
                rating: 4.7,
                downloads: '6.2K+',
                gradient: 'from-orange-500 to-red-600',
                icon: '🎯',
                features: ['Resume Screening', 'Interview Scheduling', 'Candidate Assessment', 'Offer Management'],
                complexity: 'Medium',
                estimatedTime: '3-4 hours',
                isPopular: false,
                isFavorite: false
            },
            {
                id: 4,
                title: 'Social Media Campaign Manager',
                titleEn: 'Social Media Campaign Manager',
                description: 'Create, schedule, and analyze social media campaigns across multiple platforms with AI-powered insights.',
                category: 'Marketing',
                rating: 4.9,
                downloads: '15K+',
                gradient: 'from-pink-500 to-purple-600',
                icon: '📱',
                features: ['Multi-platform Posting', 'Smart Scheduling', 'Advanced Analytics', 'Content Management'],
                complexity: 'Easy',
                estimatedTime: '1-2 hours',
                isPopular: true,
                isFavorite: false
            },
            {
                id: 5,
                title: 'Customer Support Ticket Router',
                titleEn: 'Customer Support Ticket Router',
                description: 'Intelligent ticket routing and prioritization with sentiment analysis and automated responses.',
                category: 'Support',
                rating: 4.6,
                downloads: '9.8K+',
                gradient: 'from-cyan-500 to-blue-600',
                icon: '🎧',
                features: ['Smart Routing', 'Sentiment Analysis', 'Auto Responses', 'SLA Tracking'],
                complexity: 'Advanced',
                estimatedTime: '4-6 hours',
                isPopular: false,
                isFavorite: false
            },
            {
                id: 6,
                title: 'Sales Lead Qualification',
                titleEn: 'Sales Lead Qualification',
                description: 'Automatically score and qualify leads using machine learning and behavioral analysis.',
                category: 'Sales',
                rating: 4.8,
                downloads: '11K+',
                gradient: 'from-purple-500 to-pink-600',
                icon: '🚀',
                features: ['Auto Scoring', 'Behavioral Analysis', 'Smart Qualification', 'Conversion Tracking'],
                complexity: 'Medium',
                estimatedTime: '2-3 hours',
                isPopular: true,
                isFavorite: false
            }
        ],
        categories: [
            { name: 'All', active: true, gradient: 'from-blue-500 to-purple-600' },
            { name: 'CRM', active: false, gradient: 'from-purple-500 to-pink-600' },
            { name: 'Finance', active: false, gradient: 'from-green-500 to-cyan-600' },
            { name: 'Human Resources', active: false, gradient: 'from-orange-500 to-red-600' },
            { name: 'Marketing', active: false, gradient: 'from-pink-500 to-purple-600' },
            { name: 'Support', active: false, gradient: 'from-cyan-500 to-blue-600' },
            { name: 'Sales', active: false, gradient: 'from-purple-500 to-pink-600' }
        ],
        
        get filteredTemplates() {
            let filtered = this.templates;
            
            // Filter by category
            if (this.selectedCategory !== 'All') {
                filtered = filtered.filter(template => template.category === this.selectedCategory);
            }
            
            // Filter by search query
            if (this.searchQuery) {
                const query = this.searchQuery.toLowerCase();
                filtered = filtered.filter(template => 
                    template.title.toLowerCase().includes(query) ||
                    template.titleEn.toLowerCase().includes(query) ||
                    template.description.toLowerCase().includes(query) ||
                    template.category.toLowerCase().includes(query)
                );
            }
            
            return filtered;
        },
        
        get popularTemplates() {
            return this.templates.filter(template => template.isPopular);
        },
        
        get favoriteTemplates() {
            return this.templates.filter(template => template.isFavorite);
        },
        
        setActiveCategory(categoryName) {
            this.selectedCategory = categoryName;
            this.categories.forEach(cat => {
                cat.active = cat.name === categoryName;
            });
        },
        
        filterTemplates() {
            // This method is called when search input changes
            // The filtering is automatically handled by the computed property
        },
        
        toggleFavorite(templateId) {
            const template = this.templates.find(t => t.id === templateId);
            if (template) {
                template.isFavorite = !template.isFavorite;
                
                // Show notification
                this.showNotification(
                    template.isFavorite ? 'Template added to favorites' : 'Template removed from favorites'
                );
            }
        },
        
        useTemplate(templateId) {
            const template = this.templates.find(t => t.id === templateId);
            if (template) {
                // Simulate template usage
                this.showNotification(`Loading template: ${template.title}`);
                
                // In a real app, this would redirect to template editor
                setTimeout(() => {
                    this.showNotification(`Template ${template.title} loaded successfully!`);
                }, 2000);
            }
        },
        
        previewTemplate(templateId) {
            this.selectedTemplate = this.templates.find(t => t.id === templateId);
            this.showPreview = true;
        },
        
        closePreview() {
            this.showPreview = false;
            this.selectedTemplate = null;
        },
        
        showNotification(message, type = 'success') {
            this.message = message;
            this.messageType = type;
            this.showMessage = true;
            
            setTimeout(() => {
                this.showMessage = false;
            }, 3000);
        },
        
        loadMoreTemplates() {
            this.loading = true;
            this.showNotification('Loading more templates...');
            
            // Simulate API call
            setTimeout(() => {
                this.loading = false;
                this.showNotification('New templates loaded successfully!');
            }, 2000);
        },
        
        init() {
            // Initialize the component
            this.showNotification('Welcome to the Automation Hub! 🚀');
        }
    }
}
</script>
@endpush
