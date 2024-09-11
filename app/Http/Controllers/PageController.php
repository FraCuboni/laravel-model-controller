<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function page()
    {
        return view('page');
    }

    public function movies()
    {
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
