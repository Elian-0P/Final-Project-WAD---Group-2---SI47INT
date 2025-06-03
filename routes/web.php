<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('evaluations', EvaluationController::class)->middleware('auth');