<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AnalyticsData;
use Carbon\Carbon;

class AnalyticsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();

        // Generate sample data for the last 30 days
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            // Revenue data
            AnalyticsData::create([
                'metric_name' => 'daily_revenue',
                'metric_type' => 'revenue',
                'value' => rand(5000, 15000),
                'unit' => 'USD',
                'date' => $date->format('Y-m-d'),
                'metadata' => [
                    'source' => 'subscriptions',
                    'currency' => 'USD'
                ]
            ]);

            // Active users
            AnalyticsData::create([
                'metric_name' => 'active_users',
                'metric_type' => 'users',
                'value' => rand(1200, 2500),
                'unit' => 'count',
                'date' => $date->format('Y-m-d'),
                'metadata' => [
                    'type' => 'daily_active'
                ]
            ]);

            // Automation efficiency
            AnalyticsData::create([
                'metric_name' => 'automation_efficiency',
                'metric_type' => 'efficiency',
                'value' => rand(85, 98),
                'unit' => '%',
                'date' => $date->format('Y-m-d'),
                'metadata' => [
                    'calculation' => 'successful_tasks / total_tasks'
                ]
            ]);

            // Tasks automated
            AnalyticsData::create([
                'metric_name' => 'tasks_automated',
                'metric_type' => 'automation',
                'value' => rand(50000, 120000),
                'unit' => 'count',
                'date' => $date->format('Y-m-d'),
                'metadata' => [
                    'type' => 'daily_total'
                ]
            ]);
        }

        // Current totals
        AnalyticsData::create([
            'metric_name' => 'total_revenue',
            'metric_type' => 'revenue',
            'value' => 2500000,
            'unit' => 'USD',
            'date' => Carbon::today(),
            'metadata' => ['type' => 'lifetime']
        ]);

        AnalyticsData::create([
            'metric_name' => 'total_users',
            'metric_type' => 'users',
            'value' => 15420,
            'unit' => 'count',
            'date' => Carbon::today(),
            'metadata' => ['type' => 'total_registered']
        ]);

        AnalyticsData::create([
            'metric_name' => 'total_automations',
            'metric_type' => 'automation',
            'value' => 89000000,
            'unit' => 'count',
            'date' => Carbon::today(),
            'metadata' => ['type' => 'lifetime_total']
        ]);
    }
}
