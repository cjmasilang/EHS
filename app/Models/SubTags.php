<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTags extends Model
{
    use HasFactory;
    protected $table = 'sub_tags';
    protected $fillable = [
        'tags_id',
        'sub_tags',
    ];
}

