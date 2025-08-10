<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class AnalyticsData extends Model
{
    use HasFactory;

    protected $fillable = [
        'metric_name',
        'metric_type',
        'value',
        'unit',
        'date',
        'metadata'
    ];

    protected $casts = [
        'metadata' => 'array',
        'value' => 'decimal:2',
        'date' => 'date'
    ];

    public function scopeByType($query, $type)
    {
        return $query->where('metric_type', $type);
    }

    public function scopeByMetric($query, $metric)
    {
        return $query->where('metric_name', $metric);
    }

    public function scopeDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('date', [$startDate, $endDate]);
    }

    public function scopeRecent($query, $days = 30)
    {
        return $query->where('date', '>=', Carbon::now()->subDays($days));
    }

    public static function getMetricValue($metricName, $date = null)
    {
        $date = $date ?: Carbon::today();
        return static::where('metric_name', $metricName)
            ->where('date', $date)
            ->first()?->value ?? 0;
    }

    public static function getMetricHistory($metricName, $days = 30)
    {
        return static::where('metric_name', $metricName)
            ->recent($days)
            ->orderBy('date')
            ->get();
    }
}
