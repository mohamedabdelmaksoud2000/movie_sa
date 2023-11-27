<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'rate',
        'trailer',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class,'genre_movie','movie_id','genre_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');
    }

    public function getImageUrlAttribute()
    {
        return asset('app/movie/'.$this->image);
    }

}
