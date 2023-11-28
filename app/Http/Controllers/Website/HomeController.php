<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $movies = Movie::orderBy('created_at','desc')->take(5)->get();
        return view('website.home',compact('movies'));
    }
}
