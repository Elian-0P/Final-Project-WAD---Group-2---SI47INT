<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\InternshipVacancyController;
use App\Http\Controllers\InternshipReportController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\InternshipApplicationController;

use App\Http\Controllers\Api\EvaluationApiController;
use App\Http\Controllers\Api\AnnouncementApiController;
use App\Http\Controllers\Api\InternshipApplicationApiController;
use App\Http\Controllers\Api\InternshipReportApiController;
use App\Http\Controllers\Api\InternshipVacancyApiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('evaluations', EvaluationController::class)->middleware('auth');
Route::resource('internshipReports', InternshipReportController::class)->middleware('auth');
Route::resource('internships', InternshipApplicationController::class)->middleware('auth');
Route::resource('announcements', AnnouncementController::class);
Route::resource('vacancies', InternshipVacancyController::class);


Route::get('/api/internships', [InternshipApplicationApiController::class, 'index']);
Route::get('/api/internships/{id}', [InternshipApplicationApiController::class, 'show']);
Route::get('/api/announcements', [AnnouncementApiController::class, 'index']);
Route::get('/api/announcements/{id}', [AnnouncementApiController::class, 'show']);
Route::get('/api/internshipReports', [InternshipReportApiController::class, 'index']);
Route::get('/api/internshipReports/{id}', [InternshipReportApiController::class, 'show']);
Route::get('/api/vacancies', [InternshipVacancyApiController::class, 'index']);
Route::get('/api/vacancies/{id}', [InternshipVacancyApiController::class, 'show']);
Route::get('/api/evaluations', [EvaluationApiController::class, 'index']);
Route::get('/api/evaluations/{id}', [EvaluationApiController::class, 'show']);



