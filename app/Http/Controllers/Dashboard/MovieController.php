<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\MovieHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Traits\ImageFile;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    use ImageFile;
    public function index()
    {
        $movies = Movie::all();
        return view('dashboard.movie.index',compact('movies'));
    }

    public function create()
    {
        $actors = Actor::all();
        $genres = Genre::all();
        return view('dashboard.movie.create',compact(['actors','genres']));
    }

    public function store(StoreMovieRequest $request)
    {
        $request = $this->uploadImage($request , 'movie');
        $request = MovieHelper::uploadVideo($request);
        $movie = Movie::create($request->all());
        $movie->actors()->sync($request->actors);
        $movie->genres()->sync($request->genres);
        toastr()->success('movie has been created successfully!');
        return redirect()->route('dashboard.movie.index');
    }


    public function edit(string $id)
    {
        $actors = Actor::all();
        $genres = Genre::all();
        $movie = Movie::find($id);
        return view('dashboard.movie.update',compact(['actors','genres','movie']));
    }

    public function update(UpdateMovieRequest $request, string $id)
    {
        $movie = Movie::find($id);
        $request = $this->updateImage($request , $movie->image , 'movie');
        $request = MovieHelper::updateVideo($request,$movie->trailer);
        $movie->update($request->all());
        $movie->actors()->sync($request->actors);
        $movie->genres()->sync($request->genres);
        toastr()->success('movie has been updated successfully!');
        return redirect()->route('dashboard.movie.index');
    }

    public function destroy(Request $request)
    {
        $movie = Movie::find($request->id);
        $request = $this->deleteImage($movie->image , 'movie');
        $request = MovieHelper::deleteVideo($movie->trailer);
        $movie->actors()->detach();
        $movie->genres()->detach();
        $movie->delete();
        toastr()->success('movie has been deleted successfully!');
        return redirect()->route('dashboard.movie.index');
    }
}
