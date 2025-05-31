<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipReportController;

Route::middleware('api')->group(function () {
    Route::get('/reports', [InternshipReportController::class, 'index']);
    Route::get('/reports', 'InternshipReportController@index');
    Route::post('/reports', [InternshipReportController::class, 'store']);
    Route::get('/reports/{id}', [InternshipReportController::class, 'show']);
    Route::put('/reports/{id}', [InternshipReportController::class, 'update']);
    Route::delete('/reports/{id}', [InternshipReportController::class, 'destroy']);
});
