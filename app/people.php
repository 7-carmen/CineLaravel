<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{

    public function actores(){
        return $this->belongsToMany("App\movie", 'people_actuan_movies', 'people_id', 'movie_id');
    }

    public function directores(){
        return $this->belongsToMany("App\movie", 'people_dirigen_movies', 'people_id', 'movie_id');
    }
}
