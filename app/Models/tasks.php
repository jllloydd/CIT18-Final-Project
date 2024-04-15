<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $table = [
        'task',
        'task_date',
        'task_time',
        'desc'
    ];
    
}
