<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentReport extends Model
{
    protected $table = 'incident_report';
    protected $fillable = [
        'name',
        'department_id',
        'employee_detail',
    ];
}
