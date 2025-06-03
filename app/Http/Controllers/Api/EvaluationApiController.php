<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;

class EvaluationApiController extends Controller
{
    public function index()
    {
        return response()->json(Evaluation::all());
    }

    public function show($id)
    {
        return response()->json(Evaluation::findOrFail($id));
    }
}
