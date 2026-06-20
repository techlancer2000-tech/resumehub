<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'user_id',
        'resume_template_id',
        'title',
        'theme_color',
        'font_family',
        'is_public',
        'views',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    public function profile()
    {
        return $this->hasOne(ResumeProfile::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class)
            ->orderBy('sort_order');
    }

    public function educations()
    {
        return $this->hasMany(Education::class)
            ->orderBy('sort_order');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class)
            ->orderBy('sort_order');
    }

    public function projects()
    {
        return $this->hasMany(Project::class)
            ->orderBy('sort_order');
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function socialLinks()
    {
        return $this->hasMany(SocialLink::class);
    }

    public function template()
    {
        return $this->belongsTo(ResumeTemplate::class);
    }
}
