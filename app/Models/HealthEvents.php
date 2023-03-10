<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthEvents extends Model
{
    protected $table = 'health_events';
    protected $fillable = [
        'id',
        'title',
        'event_month',
        'name',
    ];
}
