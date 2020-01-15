<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class myMovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        // dd($movies);

        return view('pages.myMovies', compact('movies'));
    }
}
