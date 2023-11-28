<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $movies = Movie::all();
        return view('website.movies',compact('movies'));
    }
}
