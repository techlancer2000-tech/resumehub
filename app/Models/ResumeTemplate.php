<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeTemplate extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'blade_view',
        'description',
        'is_premium',
        'is_active',
    ];

    protected $casts = [
        'is_premium' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($template) {
            $template->slug = Str::slug($template->name);
        });
    }

    public function resumes(): HasMany
    {
        return $this->hasMany(Resume::class);
    }
}
