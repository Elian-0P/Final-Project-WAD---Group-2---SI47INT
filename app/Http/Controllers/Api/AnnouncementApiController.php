<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;

class AnnouncementApiController extends Controller
{
    public function index()
    {
        return response()->json(Announcement::all());
    }

    public function show($id)
    {
        return response()->json(Announcement::findOrFail($id));
    }
}
