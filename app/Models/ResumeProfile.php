<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeProfile extends Model
{
    protected $fillable = [
        'resume_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'profession',
        'address',
        'city',
        'country',
        'website',
        'photo',
        'summary',
    ];
}
