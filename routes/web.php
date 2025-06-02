<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipApplicationController;
use App\Http\Controllers\Api\InternshipApplicationApiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('internships', InternshipApplicationController::class)->middleware('auth');


Route::get('/api/internships', [InternshipApplicationApiController::class, 'index']);
Route::get('/api/internships/{id}', [InternshipApplicationApiController::class, 'show']);
