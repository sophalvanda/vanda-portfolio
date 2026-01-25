<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $fillable = [
        'method', 'url', 'status_code', 'ip_address', 
        'user_agent', 'response_time_ms'
    ];
}
