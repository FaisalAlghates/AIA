<?php

namespace Modules\Home\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $stats = [
            [
                'value' => '10K+',
                'label' => 'Happy Customers'
            ],
            [
                'value' => '500K+', 
                'label' => 'Automated Tasks'
            ],
            [
                'value' => '99.9%',
                'label' => 'Uptime Guarantee'
            ],
            [
                'value' => '24/7',
                'label' => 'Expert Support'
            ]
        ];

        $features = [
            [
                'title' => 'AI-Powered Automation',
                'description' => 'Leverage advanced artificial intelligence to automate complex workflows, predict outcomes, and optimize performance in real-time.',
                'color' => 'indigo'
            ],
            [
                'title' => 'No-Code Solutions',
                'description' => 'Build sophisticated automation workflows without writing a single line of code using our intuitive drag-and-drop interface.',
                'color' => 'purple'
            ],
            [
                'title' => 'Enterprise Security',
                'description' => 'Bank-grade security with end-to-end encryption, compliance certifications, and enterprise-level access controls.',
                'color' => 'emerald'
            ],
            [
                'title' => 'Real-Time Analytics',
                'description' => 'Monitor performance, track metrics, and gain actionable insights with comprehensive real-time analytics dashboards.',
                'color' => 'blue'
            ],
            [
                'title' => 'Seamless Integration',
                'description' => 'Connect with 500+ popular apps and services through pre-built integrations and robust API ecosystem.',
                'color' => 'cyan'
            ],
            [
                'title' => 'Smart Templates',
                'description' => 'Get started instantly with industry-specific automation templates designed by experts and optimized for results.',
                'color' => 'orange'
            ]
        ];

        return view('home::livewire.home-page', compact('stats', 'features'));
    }
}
