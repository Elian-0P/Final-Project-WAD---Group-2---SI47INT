<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InternshipReport;

class InternshipReportApiController extends Controller
{
    public function index()
    {
        return response()->json(InternshipReport::all());
    }

    public function show($id)
    {
        return response()->json(InternshipReport::findOrFail($id));
    }
}
