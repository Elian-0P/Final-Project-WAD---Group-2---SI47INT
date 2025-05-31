<?php

// app/Models/InternshipReport.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_name',
        'company_name',
        'description',
        'start_date',
        'end_date'
    ];
}
