<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            // Leadership Team
            [
                'name' => 'Faisal Yahya Al-Ghates',
                'position' => 'Co-Founder & CEO',
                'bio' => 'Visionary leader with over 15 years of experience in AI and automation. Passionate about transforming businesses through intelligent automation solutions.',
                'initials' => 'FG',
                'color_from' => '#3B82F6',
                'color_to' => '#8B5CF6',
                'skills' => ['AI Strategy', 'Leadership', 'Innovation'],
                'social_links' => [
                    'linkedin' => '#',
                    'twitter' => '#'
                ],
                'is_leadership' => true,
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Abdulaziz Al-Zaidi',
                'position' => 'Co-Founder & CTO',
                'bio' => 'Technical architect and AI expert with deep expertise in machine learning and automation systems. Drives the technical innovation behind our cutting-edge platform.',
                'initials' => 'AZ',
                'color_from' => '#8B5CF6',
                'color_to' => '#EC4899',
                'skills' => ['Machine Learning', 'Architecture', 'Automation'],
                'social_links' => [
                    'linkedin' => '#',
                    'github' => '#'
                ],
                'is_leadership' => true,
                'is_active' => true,
                'sort_order' => 2
            ],
            // Core Team
            [
                'name' => 'Sarah Wilson',
                'position' => 'Lead AI Engineer',
                'bio' => 'Specializes in developing advanced machine learning algorithms and neural networks for automation workflows.',
                'initials' => 'SW',
                'color_from' => '#3B82F6',
                'color_to' => '#06B6D4',
                'skills' => ['Python', 'TensorFlow', 'AI'],
                'social_links' => [
                    'linkedin' => '#',
                    'github' => '#'
                ],
                'is_leadership' => false,
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'name' => 'Michael Johnson',
                'position' => 'Senior Backend Developer',
                'bio' => 'Builds robust and scalable backend systems that power our automation platform with enterprise-grade reliability.',
                'initials' => 'MJ',
                'color_from' => '#10B981',
                'color_to' => '#059669',
                'skills' => ['Laravel', 'PHP', 'APIs'],
                'social_links' => [
                    'linkedin' => '#',
                    'github' => '#'
                ],
                'is_leadership' => false,
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'name' => 'Emily Lee',
                'position' => 'UX/UI Designer',
                'bio' => 'Creates beautiful and intuitive user experiences that make complex automation workflows simple and accessible.',
                'initials' => 'EL',
                'color_from' => '#8B5CF6',
                'color_to' => '#EC4899',
                'skills' => ['Figma', 'Design', 'UX'],
                'social_links' => [
                    'linkedin' => '#',
                    'dribbble' => '#'
                ],
                'is_leadership' => false,
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'name' => 'David Kim',
                'position' => 'DevOps Engineer',
                'bio' => 'Ensures our platform runs smoothly with advanced infrastructure, monitoring, and deployment automation.',
                'initials' => 'DK',
                'color_from' => '#F59E0B',
                'color_to' => '#EF4444',
                'skills' => ['AWS', 'Docker', 'K8s'],
                'social_links' => [
                    'linkedin' => '#',
                    'github' => '#'
                ],
                'is_leadership' => false,
                'is_active' => true,
                'sort_order' => 6
            ],
            [
                'name' => 'Anna Garcia',
                'position' => 'Data Scientist',
                'bio' => 'Analyzes complex data patterns to improve our AI models and provide actionable insights for users.',
                'initials' => 'AG',
                'color_from' => '#06B6D4',
                'color_to' => '#3B82F6',
                'skills' => ['Analytics', 'ML', 'Statistics'],
                'social_links' => [
                    'linkedin' => '#',
                    'github' => '#'
                ],
                'is_leadership' => false,
                'is_active' => true,
                'sort_order' => 7
            ],
            [
                'name' => 'Robert Taylor',
                'position' => 'Security Engineer',
                'bio' => 'Protects our platform and users with advanced security measures, encryption, and compliance protocols.',
                'initials' => 'RT',
                'color_from' => '#6366F1',
                'color_to' => '#8B5CF6',
                'skills' => ['Security', 'Encryption', 'Compliance'],
                'social_links' => [
                    'linkedin' => '#',
                    'github' => '#'
                ],
                'is_leadership' => false,
                'is_active' => true,
                'sort_order' => 8
            ]
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
