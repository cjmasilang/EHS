<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstAid extends Model
{
    protected $table = 'first_aid_training';
    protected $fillable = [
        'id',
        'title',
        'venue',
        'name',
    ];
}
