<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
public function index()
{
$evaluations = Evaluation::all();
return view('evaluations.index', compact('evaluations'));
}
public function create()
{
    return view('evaluations.create');
}

public function store(Request $request)
{
    $request->validate([
        'student_name' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'content' => 'nullable|string',
        'date' => 'nullable|date',
    ]);

    Evaluation::create($request->all());
    return redirect()->route('evaluations.index')->with('success', 'Evaluation created.');
}

public function edit(Evaluation $evaluation)
{
    return view('evaluations.edit', compact('evaluation'));
}

public function update(Request $request, Evaluation $evaluation)
{
    $request->validate([
        'student_name' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'content' => 'nullable|string',
        'date' => 'nullable|date',
    ]);

    $evaluation->update($request->all());
    return redirect()->route('evaluations.index')->with('success', 'Evaluation updated.');
}

public function destroy(Evaluation $evaluation)
{
    $evaluation->delete();
    return redirect()->route('evaluations.index')->with('success', 'Evaluation deleted.');
}
}