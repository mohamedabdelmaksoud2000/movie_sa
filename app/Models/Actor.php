<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'actor_movie','actor_id','movie_id');
    }

    public function getImageUrlAttribute()
    {
        return asset('app/actor/'.$this->image);
    }

}
