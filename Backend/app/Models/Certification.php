<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = ['title', 'issuer', 'issue_date', 'verification_url'];

    protected $casts = [
        'issue_date' => 'date',
    ];
}
