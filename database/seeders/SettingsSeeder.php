<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Site Information
            [
                'key' => 'site_name',
                'value' => 'AIA - AI Automation Platform',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Website name displayed in header and title'
            ],
            [
                'key' => 'site_description',
                'value' => 'Transform your business with intelligent automation solutions powered by cutting-edge AI technology.',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Meta description for SEO'
            ],
            [
                'key' => 'contact_email',
                'value' => 'contact@aia.com',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Main contact email address'
            ],
            [
                'key' => 'contact_phone',
                'value' => '+1 (555) 123-4567',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Main contact phone number'
            ],
            [
                'key' => 'office_address',
                'value' => '123 AI Street, Tech City, TC 12345',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Office address'
            ],
            
            // Social Media
            [
                'key' => 'social_links',
                'value' => [
                    'linkedin' => 'https://linkedin.com/company/aia',
                    'twitter' => 'https://twitter.com/aia_platform',
                    'github' => 'https://github.com/aia',
                    'youtube' => 'https://youtube.com/c/aia'
                ],
                'type' => 'json',
                'group' => 'social',
                'description' => 'Social media links'
            ],
            
            // Features
            [
                'key' => 'enable_analytics',
                'value' => '1',
                'type' => 'boolean',
                'group' => 'features',
                'description' => 'Enable analytics tracking'
            ],
            [
                'key' => 'enable_contact_form',
                'value' => '1',
                'type' => 'boolean',
                'group' => 'features',
                'description' => 'Enable contact form submissions'
            ],
            [
                'key' => 'maintenance_mode',
                'value' => '0',
                'type' => 'boolean',
                'group' => 'general',
                'description' => 'Enable maintenance mode'
            ],
            
            // Hero Section
            [
                'key' => 'hero_title',
                'value' => 'Transform Your Business with AI Automation',
                'type' => 'text',
                'group' => 'hero',
                'description' => 'Main hero section title'
            ],
            [
                'key' => 'hero_subtitle',
                'value' => 'Streamline operations, boost productivity, and unlock growth with our cutting-edge artificial intelligence platform.',
                'type' => 'text',
                'group' => 'hero',
                'description' => 'Hero section subtitle'
            ],
            [
                'key' => 'hero_cta_text',
                'value' => 'Start Free Trial',
                'type' => 'text',
                'group' => 'hero',
                'description' => 'Hero section call-to-action button text'
            ],
            [
                'key' => 'hero_cta_link',
                'value' => '/contact',
                'type' => 'text',
                'group' => 'hero',
                'description' => 'Hero section call-to-action button link'
            ],
            
            // Statistics
            [
                'key' => 'stats',
                'value' => [
                    [
                        'label' => 'Active Users',
                        'value' => '15,000+',
                        'description' => 'Businesses trust our platform'
                    ],
                    [
                        'label' => 'Automations',
                        'value' => '89M+',
                        'description' => 'Tasks automated successfully'
                    ],
                    [
                        'label' => 'Time Saved',
                        'value' => '2.5M+',
                        'description' => 'Hours saved monthly'
                    ],
                    [
                        'label' => 'Countries',
                        'value' => '50+',
                        'description' => 'Global presence'
                    ]
                ],
                'type' => 'json',
                'group' => 'stats',
                'description' => 'Homepage statistics'
            ]
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
