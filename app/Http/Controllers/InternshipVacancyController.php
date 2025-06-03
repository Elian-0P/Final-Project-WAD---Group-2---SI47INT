<?php

namespace App\Http\Controllers;

use App\Models\InternshipVacancy;
use Illuminate\Http\Request;

class InternshipVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = InternshipVacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'requirements' => 'required|string',
            'positions_available' => 'required|integer|min:1'
        ]);

        InternshipVacancy::create($validated);
        return redirect()->route('vacancies.index')->with('success', 'Vacancy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InternshipVacancy $internshipVacancy)
    {
        return view('vacancies.show', compact('internshipVacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternshipVacancy $internshipVacancy)
    {
        return view('vacancies.edit', compact('internshipVacancy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InternshipVacancy $internshipVacancy)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'requirements' => 'required|string',
            'positions_available' => 'required|integer|min:1'
        ]);

        $internshipVacancy->update($validated);
        return redirect()->route('vacancies.index')->with('success', 'Vacancy updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternshipVacancy $internshipVacancy)
    {
        $internshipVacancy->delete();
        return redirect()->route('vacancies.index')->with('success', 'Vacancy deleted successfully.');
    }
}
