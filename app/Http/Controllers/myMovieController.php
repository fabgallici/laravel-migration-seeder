<?php

namespace App\Http\Controllers;
use App\Mymovie;
use Illuminate\Http\Request;

class myMovieController extends Controller
{
    public function index() {
        $movies = Mymovie::all();

        dd($movies);

        // return $movies;  //return json

        // return view('pages.myMovies', compact('movies'));
    }
}
