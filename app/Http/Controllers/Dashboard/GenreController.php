<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    protected $genre;

    public function __construct(Genre $genre)
    {
        $this->genre = $genre ;
    }

    public function index()
    {
        $genres = $this->genre->all();
        return view('dashboard.genre.index',compact('genres'));
    }

    public function create()
    {
        return view('dashboard.genre.create');
    }

    public function store(StoreGenreRequest $request)
    {
        
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
