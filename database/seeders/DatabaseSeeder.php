<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create multiple users for blog posts
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@aia.com',
        ]);

        User::factory()->create([
            'name' => 'John Smith',
            'email' => 'john@aia.com',
        ]);

        User::factory()->create([
            'name' => 'Sarah Johnson',
            'email' => 'sarah@aia.com',
        ]);

        User::factory()->create([
            'name' => 'Michael Brown',
            'email' => 'michael@aia.com',
        ]);

        // Seed dynamic content
        $this->call([
            ServicesSeeder::class,
            PricingPlansSeeder::class,
            TeamMembersSeeder::class,
            AnalyticsDataSeeder::class,
            SettingsSeeder::class,
            BlogCategorySeeder::class,
            BlogPostSeederEnglish::class,
        ]);
    }
}
