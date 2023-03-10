<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentClassification extends Model
{
    use HasFactory;

    protected $table = 'accident_classification';
    protected $fillable = [
        'id',
        'first_aid',
        'medical_case',
        'fatality',
        'near_miss',
    ];
}
