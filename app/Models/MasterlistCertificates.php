<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterlistCertificates extends Model
{
    use HasFactory;

    protected $table = 'masterlist';
    protected $fillable = [
        'name',
        'department_id',
        'position',
        'health_card',
        'food_handlers_cert',

    ];
}
