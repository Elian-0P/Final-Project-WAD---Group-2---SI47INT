<?php

Route::get('/reports', 'InternshipReportController@index');
Route::resource('internship-reports', InternshipReportController::class);
