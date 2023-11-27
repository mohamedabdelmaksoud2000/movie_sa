<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;
use App\Models\Actor;
use App\Traits\ImageFile;
use Illuminate\Http\Request;

class ActorController extends Controller
{

    use ImageFile;

    public function index()
    {
        $actors = Actor::all();
        return view('dashboard.actor.index',compact('actors'));
    }

    public function create()
    {
        return view('dashboard.actor.create');
    }

    public function store(StoreActorRequest $request)
    {
        $request = $this->uploadImage($request , 'actor');
        $actor = Actor::create($request->all());
        toastr()->success('actor has been created successfully!');
        return redirect()->route('dashboard.actor.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $actor = Actor::find($id);
        return view('dashboard.actor.update',compact('actor'));
    }

    public function update(UpdateActorRequest $request, string $id)
    {
        $actor = Actor::find($id);
        $request = $this->updateImage($request,$actor->image,'actor');
        $actor->update($request->all());
        toastr()->success('actor has been updated successfully!');
        return redirect()->route('dashboard.actor.index');
    }

    public function destroy(Request $request)
    {
        $actor = Actor::find($request->id);
        if(!$actor->movies->count())
        {
            $this->deleteImage($actor->image,'actor');
            $actor->delete();
            toastr()->success('actor has been deleted successfully!');
        }else
        {
            toastr()->error('actor has movies,you can\'t delete');
        }
        return redirect()->route('dashboard.actor.index');
    }
}
