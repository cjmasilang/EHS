<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewHiredEmployees extends Model
{
    protected $table = 'new_hired_employees';
    protected $fillable = [
        'id',
        'name',
        'date_of_hired',
        'health_card',
        'food_handlers_cert',
    ];
}
