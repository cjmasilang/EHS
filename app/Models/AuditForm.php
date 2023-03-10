<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditForm extends Model
{
    use HasFactory;
    protected $table = "audit_form";
    protected $fillable = [
        'name',
        'audit_date',
        'compliant',
        'not_compliant',
    ];



}
