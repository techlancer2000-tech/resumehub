<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
     protected $fillable = [
        'resume_id',
        'job_title',
        'company',
        'location',
        'start_date',
        'end_date',
        'currently_working',
        'description',
        'sort_order',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'currently_working' => 'boolean',
    ];
}
