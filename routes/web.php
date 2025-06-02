<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipReportController;
use App\Http\Controllers\Api\InternshipReportApiController;
use App\Http\Controllers\InternshipApplicationController;
use App\Http\Controllers\Api\InternshipApplicationApiController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('internshipReports', InternshipReportController::class)->middleware('auth');

Route::get('/api/internshipReports', [InternshipReportApiController::class, 'index']);
Route::get('/api/internshipReports/{id}', [InternshipReportApiController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('announcements', AnnouncementController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('internships', InternshipApplicationController::class)->middleware('auth');

Route::get('/api/internships', [InternshipApplicationApiController::class, 'index']);
Route::get('/api/internships/{id}', [InternshipApplicationApiController::class, 'show']);

