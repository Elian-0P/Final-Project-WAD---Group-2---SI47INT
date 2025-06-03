<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InternshipVacancy;

class InternshipVacancyApiController extends Controller
{
    public function index()
    {
        return response()->json(InternshipVacancy::all());
    }

    public function show($id)
    {
        return response()->json(InternshipVacancy::findOrFail($id));
    }
}
