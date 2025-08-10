<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PricingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'monthly_price',
        'yearly_price',
        'features',
        'is_popular',
        'is_active',
        'sort_order',
        'color_from',
        'color_to',
        'cta_text',
        'cta_link'
    ];

    protected $casts = [
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
        'monthly_price' => 'decimal:2',
        'yearly_price' => 'decimal:2'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at');
    }

    public function getYearlySavingsAttribute()
    {
        return ($this->monthly_price * 12) - $this->yearly_price;
    }

    public function getYearlySavingsPercentageAttribute()
    {
        $yearlyTotal = $this->monthly_price * 12;
        return $yearlyTotal > 0 ? round((($yearlyTotal - $this->yearly_price) / $yearlyTotal) * 100) : 0;
    }
}
