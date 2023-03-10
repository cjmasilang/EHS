<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalLogbook extends Model
{
    protected $table = 'medical_logbook';
    protected $fillable = [
        'id',
        'name',
        'medicine',
        'qty',
    ];
}
