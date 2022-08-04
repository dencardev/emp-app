<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname', 
        'department',
        'position',
        'email',
        'make',
        'model',
        'serial',
        'category',
        'date_acquired',
        'os',
        'processor',
        'proc_speed',
        'ram_type',
        'ram_slots',
        'ram_capacity',
        'ram_mhz',
        'drve_type',
        'drve_capacity',
        'remarks',
        'avatar'
    ];
}
