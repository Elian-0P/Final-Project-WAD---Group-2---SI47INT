<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InternshipApplication;

class InternshipApplicationApiController extends Controller
{
        public function index()
    {
        return response()->json(InternshipApplication::all());
    }

    public function show($id)
    {
        return response()->json(InternshipApplication::findOrFail($id));
    }
}
