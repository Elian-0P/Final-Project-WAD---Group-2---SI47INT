<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class InternshipReport extends Model
{
    use HasFactory; 
    
    protected $fillable = [ 'title', 'student_name', 'supervisor', 'report_file', ]; 
}
