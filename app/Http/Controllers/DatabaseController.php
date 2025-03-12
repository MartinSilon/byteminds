<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use App\Models\Photo;
class DatabaseController extends Controller
{
    public function index()
    {
        $texts = Text::all();
        $photos = Photo::all();
        return view('backend.database.database', compact('texts', 'photos'));
    }
}
