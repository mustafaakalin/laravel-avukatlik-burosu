<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // get all about records
        $about = \App\Models\About::all();

        // pass the about records to the about view
        return view('about', compact('about'));
    }
}
