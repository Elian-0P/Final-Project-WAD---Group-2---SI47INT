<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipVacancyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vacancies', [InternshipVacancyController::class, 'index'])->name('vacancies.index');
Route::get('/vacancies/create', [InternshipVacancyController::class, 'create'])->name('vacancies.create');
Route::post('/vacancies', [InternshipVacancyController::class, 'store'])->name('vacancies.store');
Route::get('/vacancies/{internshipVacancy}/edit', [InternshipVacancyController::class, 'edit'])->name('vacancies.edit');
Route::put('/vacancies/{internshipVacancy}', [InternshipVacancyController::class, 'update'])->name('vacancies.update');
Route::delete('/vacancies/{internshipVacancy}', [InternshipVacancyController::class, 'destroy'])->name('vacancies.destroy');
