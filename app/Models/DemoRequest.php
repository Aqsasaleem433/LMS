<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $table = 'demo_requests';
    protected $fillable = [
        'name',
        'email',
        'message',
        'status'
    ];
}
