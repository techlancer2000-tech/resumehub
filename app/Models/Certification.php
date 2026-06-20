<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'resume_id',
        'name',
        'issuer',
        'issue_date',
        'credential_url',
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];
}
