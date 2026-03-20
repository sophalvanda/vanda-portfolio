<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'company',
        'period',
        'points'
    ];

    /**
     * The attributes that should be cast.
     * This allows you to treat the JSON column as a native PHP array.
     */
    protected $casts = [
        'points' => 'array',
    ];
}