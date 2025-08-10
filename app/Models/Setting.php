<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'description'
    ];

    public function getValueAttribute($value)
    {
        return match($this->type) {
            'boolean' => (bool) $value,
            'number' => (float) $value,
            'json' => json_decode($value, true),
            default => $value
        };
    }

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = match($this->type) {
            'boolean' => $value ? '1' : '0',
            'number' => (string) $value,
            'json' => is_array($value) || is_object($value) ? json_encode($value) : $value,
            default => is_array($value) ? json_encode($value) : (string) $value
        };
    }

    public static function get($key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function set($key, $value, $type = 'text', $group = 'general', $description = null)
    {
        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'type' => $type,
                'group' => $group,
                'description' => $description
            ]
        );
    }

    public function scopeByGroup($query, $group)
    {
        return $query->where('group', $group);
    }
}
