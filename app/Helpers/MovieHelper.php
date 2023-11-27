<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class MovieHelper 
{

    static function uploadVideo($request)
    {
        $video = $request->file('trailer_file');
        $name = $video->hashName();
        $video->store('trailer');
        $request->merge(['trailer'=>$name]);
        return $request;
    }

    static function updateVideo($request,$oldTrailer)
    {
        if($request->trailer_file)
        {
            Storage::delete('trailer/'.$oldTrailer);
            $video = $request->file('trailer_file');
            $name = $video->hashName();
            $video->store('trailer');
            $request->merge(['trailer'=>$name]);
        }
        return $request;
    }
    
    static function deleteVideo($trailer)
    {
        Storage::delete('trailer/'.$trailer);
    }
}