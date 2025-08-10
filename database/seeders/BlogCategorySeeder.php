<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Artificial Intelligence',
                'description' => 'Latest developments and trends in artificial intelligence and machine learning',
                'color' => '#3B82F6',
                'icon' => '🤖',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Machine Learning',
                'description' => 'Technical articles on machine learning algorithms and neural networks',
                'color' => '#10B981',
                'icon' => '🧠',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Natural Language Processing',
                'description' => 'Techniques for understanding and processing human language using AI',
                'color' => '#8B5CF6',
                'icon' => '💬',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Computer Vision',
                'description' => 'AI applications in image and video analysis and processing',
                'color' => '#F59E0B',
                'icon' => '👁️',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'AI Applications',
                'description' => 'Practical use cases for artificial intelligence across various industries',
                'color' => '#EF4444',
                'icon' => '🚀',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Technology News',
                'description' => 'Latest news and developments in technology and artificial intelligence',
                'color' => '#06B6D4',
                'icon' => '📰',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Tutorials & Educational Content',
                'description' => 'Explanations and practical tutorials for learning artificial intelligence',
                'color' => '#84CC16',
                'icon' => '📚',
                'sort_order' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $categoryData) {
            BlogCategory::create($categoryData);
        }
    }
}
