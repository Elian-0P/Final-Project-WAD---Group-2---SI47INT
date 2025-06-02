<?php

namespace App\Http\Controllers;

use App\Models\InternshipApplication;
use Illuminate\Http\Request;

class InternshipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internships = InternshipApplication::all();
        return view('internships.index', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('internships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'application_date' => 'required|date',
            'status' => 'required|in:pending,accepted,rejected',
         ]);

        InternshipApplication::create($validated);
        return redirect()->route('internships.index')->with('success', 'Internship application submitted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(InternshipApplication $internship)
    {
        return response()->json($internship);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternshipApplication $internshipApplication)
    {
         return view('internships.edit', compact('internship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InternshipApplication $internship)
    {
         $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'application_date' => 'required|date',
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $internship->update($validated);
        return redirect()->route('internships.index')->with('success', 'Internship application updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternshipApplication $internship)
    {
        $internship->delete();
        return redirect()->route('internships.index')->with('success', 'Application deleted!');
    }
}
