<?php

namespace App\Http\Controllers;

use App\Models\InternshipReport;
use Illuminate\Http\Request;

class InternshipReportController extends Controller
{
    /**
     * Display a listiwng of the resource.
     */
    public function index()
    {
        $reports = InternshipReport::all();
        return view('internshipReports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('internshipReports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'student_name' => 'required|string|max:255',
        'supervisor' => 'required|string|max:255',
        'report_file' => 'nullable|file|mimes:pdf,doc,docx',
    ]);

        if ($request->hasFile('report_file')) {
        $filePath = $request->file('report_file')->store('reports', 'public');
        $validated['report_file'] = $filePath;
    }

    InternshipReport::create($validated);
    return redirect()->route('internshipReports.index')->with('success', 'Report added');
}

    /**
     * Display the specified resource.
     */
    public function show(InternshipReport $internshipReport)
    {
        return view('internshipReports.show', compact('internshipReport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternshipReport $internshipReport)
    {
        return view('internshipReports.edit', compact('internshipReport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InternshipReport $internshipReport)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'supervisor' => 'required|string|max:255',
            'report_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('report_file')) {
        $filePath = $request->file('report_file')->store('reports', 'public');
        $validated['report_file'] = $filePath;
        }

        $internshipReport->update($validated);
        return redirect()->route('internshipReports.index')->with('success', 'Report updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternshipReport $internshipReport)
    {
        $internshipReport->delete();
        return redirect()->route('internshipReports.index')->with('success', 'Internship report deleted successfully.');
    }
}
