<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipApplicationController;
use App\Http\Controllers\Api\InternshipApplicationApiController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('internships', InternshipApplicationController::class)->middleware('auth');


Route::get('/api/internships', [InternshipApplicationApiController::class, 'index']);
Route::get('/api/internships/{id}', [InternshipApplicationApiController::class, 'show']);

