<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipApplication extends Model
{
    use HasFactory;

     protected $fillable = [
        'student_name',
        'company',
        'position',
        'application_date',
        'status'
    ];
}
