<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSignMonitoring extends Model
{
    protected $table = 'vital_monitoring';
    protected $fillable = [
        'id',
        'name',
        'bp',
        'pr',
        't',
        'o',
        'rr',
    ];
}
