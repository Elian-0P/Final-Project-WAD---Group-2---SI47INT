<?php

// app/Http/Controllers/InternshipReportController.php

namespace App\Http\Controllers;

use App\Http\Controllers\InternshipReportController;
Route::get('/reports', [InternshipReportController::class, 'index']);
use App\Models\InternshipReport;
use Illuminate\Http\Request;

class InternshipReportController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'intern_name' => 'required|string',
            'company_name' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $report = InternshipReport::create($validated);
        return response()->json($report, 201);
    }

    // READ
    public function index()
    {
        $reports = InternshipReport::all();
        return response()->json($reports);
    }

    public function show($id)
    {
        $report = InternshipReport::findOrFail($id);
        return response()->json($report);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $report = InternshipReport::findOrFail($id);
        $validated = $request->validate([
            'intern_name' => 'sometimes|required|string',
            'company_name' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        $report->update($validated);
        return response()->json($report);
    }

    // DELETE
    public function destroy($id)
    {
        $report = InternshipReport::findOrFail($id);
        $report->delete();
        return response()->json(['message' => 'Report deleted successfully']);
    }

    public function indexWeb()
    {
        $reports = InternshipReport::all();
        return view('internship_reports.index', compact('reports'));
    }  
}

