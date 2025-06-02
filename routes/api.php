<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Announcement;

Route::get('/announcements', function () {
    return Announcement::all();
});

Route::get('/announcements/{id}', function ($id) {
    return Announcement::findOrFail($id);
});
