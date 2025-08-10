<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PricingPlan;

class PricingPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Starter',
                'description' => 'Perfect for small businesses getting started with automation',
                'monthly_price' => 29.00,
                'yearly_price' => 290.00,
                'features' => [
                    'Up to 100 automations',
                    'Basic AI integration',
                    'Email support',
                    '1 team member',
                    'Basic analytics',
                    'Standard templates'
                ],
                'is_popular' => false,
                'is_active' => true,
                'sort_order' => 1,
                'color_from' => '#3B82F6',
                'color_to' => '#8B5CF6',
                'cta_text' => 'Start Free Trial',
                'cta_link' => '/contact'
            ],
            [
                'name' => 'Professional',
                'description' => 'Ideal for growing teams that need advanced features',
                'monthly_price' => 79.00,
                'yearly_price' => 790.00,
                'features' => [
                    'Unlimited automations',
                    'Advanced AI features',
                    'Priority support',
                    '10 team members',
                    'Advanced analytics',
                    'Custom workflows',
                    'API access',
                    'Integrations'
                ],
                'is_popular' => true,
                'is_active' => true,
                'sort_order' => 2,
                'color_from' => '#10B981',
                'color_to' => '#059669',
                'cta_text' => 'Get Started',
                'cta_link' => '/contact'
            ],
            [
                'name' => 'Enterprise',
                'description' => 'For large organizations requiring custom solutions',
                'monthly_price' => 0.00,
                'yearly_price' => 0.00,
                'features' => [
                    'Everything in Professional',
                    'Custom AI models',
                    'Dedicated support',
                    'Unlimited team members',
                    'Advanced security',
                    'Custom integrations',
                    'SLA guarantee',
                    'On-premise deployment'
                ],
                'is_popular' => false,
                'is_active' => true,
                'sort_order' => 3,
                'color_from' => '#8B5CF6',
                'color_to' => '#EC4899',
                'cta_text' => 'Contact Sales',
                'cta_link' => '/contact'
            ]
        ];

        foreach ($plans as $plan) {
            PricingPlan::create($plan);
        }
    }
}
