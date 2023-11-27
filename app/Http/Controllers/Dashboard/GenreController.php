<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;
use App\Models\Movie;
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
        $genre = Genre::create($request->safe()->all());
        toastr()->success('Genre has been created successfully!');
        return redirect()->route('dashboard.genre.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $genre = Genre::find($id);
        return view('dashboard.genre.update',compact('genre'));
    }

    public function update(UpdateGenreRequest $request,string $id)
    {
        $genre = Genre::find($id);
        $genre->update($request->all());
        toastr()->success('genre has been updated successfully!');
        return redirect()->route('dashboard.genre.index');
    }

    public function destroy(Request $request)
    {
        $genre = Genre::find($request->id);
        if(!$genre->movies->count())
        {
            $genre->delete();
            toastr()->success('genre has been deleted successfully!');
        }
        else
        {
            toastr()->error('genre has movies, you can\'t deleted');
        }
        return redirect()->route('dashboard.genre.index');
    }
}
