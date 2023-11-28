<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $movie = Movie::find($id);
        $movie->views += 1;
        $movie->save(); 
        return view('website.movie',compact('movie'));
    }
}
