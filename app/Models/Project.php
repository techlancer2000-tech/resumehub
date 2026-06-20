<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'resume_id',
        'title',
        'url',
        'description',
        'sort_order',
    ];
}
