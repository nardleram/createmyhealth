<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('home')->with([
            'photo' => $photos->random()
        ]);
    }
}
