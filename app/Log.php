<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_id', 'key', 'uri', 'method', 'user_agent',
        'ip_address', 'app', 'data',
    ];
}
