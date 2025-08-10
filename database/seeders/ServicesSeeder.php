<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Process Automation',
                'description' => 'Streamline your business processes with intelligent automation solutions that reduce manual work and increase efficiency.',
                'short_description' => 'Automate repetitive tasks and workflows',
                'icon' => 'automation',
                'color_from' => '#3B82F6',
                'color_to' => '#8B5CF6',
                'features' => [
                    'Workflow automation',
                    'Task scheduling',
                    'Process optimization',
                    'Real-time monitoring'
                ],
                'slug' => 'process-automation',
                'is_active' => true,
                'sort_order' => 1,
                'price' => 99.99,
                'price_period' => 'month'
            ],
            [
                'title' => 'AI Integration',
                'description' => 'Seamlessly integrate artificial intelligence into your existing systems to enhance decision-making and productivity.',
                'short_description' => 'Smart AI solutions for your business',
                'icon' => 'ai',
                'color_from' => '#10B981',
                'color_to' => '#3B82F6',
                'features' => [
                    'Machine learning models',
                    'Natural language processing',
                    'Computer vision',
                    'Predictive analytics'
                ],
                'slug' => 'ai-integration',
                'is_active' => true,
                'sort_order' => 2,
                'price' => 199.99,
                'price_period' => 'month'
            ],
            [
                'title' => 'Data Analytics',
                'description' => 'Transform your raw data into actionable insights with advanced analytics and visualization tools.',
                'short_description' => 'Turn data into actionable insights',
                'icon' => 'analytics',
                'color_from' => '#F59E0B',
                'color_to' => '#EF4444',
                'features' => [
                    'Real-time dashboards',
                    'Custom reports',
                    'Data visualization',
                    'Performance metrics'
                ],
                'slug' => 'data-analytics',
                'is_active' => true,
                'sort_order' => 3,
                'price' => 149.99,
                'price_period' => 'month'
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and services to support your growing business needs.',
                'short_description' => 'Secure and scalable cloud infrastructure',
                'icon' => 'cloud',
                'color_from' => '#8B5CF6',
                'color_to' => '#EC4899',
                'features' => [
                    'Cloud migration',
                    'Auto-scaling',
                    'Backup solutions',
                    '99.9% uptime'
                ],
                'slug' => 'cloud-solutions',
                'is_active' => true,
                'sort_order' => 4,
                'price' => 299.99,
                'price_period' => 'month'
            ],
            [
                'title' => 'Machine Learning',
                'description' => 'Custom machine learning models tailored to your specific business requirements and use cases.',
                'short_description' => 'Custom ML models for your needs',
                'icon' => 'ml',
                'color_from' => '#06B6D4',
                'color_to' => '#3B82F6',
                'features' => [
                    'Custom model development',
                    'Training and optimization',
                    'Model deployment',
                    'Performance monitoring'
                ],
                'slug' => 'machine-learning',
                'is_active' => true,
                'sort_order' => 5,
                'price' => 399.99,
                'price_period' => 'month'
            ],
            [
                'title' => 'Digital Transformation',
                'description' => 'Complete digital transformation services to modernize your business operations and technology stack.',
                'short_description' => 'Modernize your entire business',
                'icon' => 'transformation',
                'color_from' => '#EC4899',
                'color_to' => '#F59E0B',
                'features' => [
                    'Strategy consulting',
                    'Technology modernization',
                    'Process reengineering',
                    'Change management'
                ],
                'slug' => 'digital-transformation',
                'is_active' => true,
                'sort_order' => 6,
                'price' => 999.99,
                'price_period' => 'month'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
