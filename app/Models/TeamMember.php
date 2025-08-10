<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'bio',
        'avatar',
        'initials',
        'color_from',
        'color_to',
        'skills',
        'social_links',
        'is_leadership',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'skills' => 'array',
        'social_links' => 'array',
        'is_leadership' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeLeadership($query)
    {
        return $query->where('is_leadership', true);
    }

    public function scopeCoreTeam($query)
    {
        return $query->where('is_leadership', false);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at');
    }

    public function getAvatarUrlAttribute()
    {
        return $this->avatar ? asset('storage/' . $this->avatar) : null;
    }
}
