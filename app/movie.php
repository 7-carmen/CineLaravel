<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = [
        'cartel', 'nombre', 'duracion', 'anyo',
    ];

    public function generos(){
        return $this->belongsToMany("App\genero", 'generos_movies', 'movies_id', 'generos_id');
    }

    public function actores(){
        return $this->belongsToMany("App\people", 'people_actuan_movies', 'movie_id',  'people_id');
    }

    public function directores(){
        return $this->belongsToMany("App\people", 'people_dirigen_movies', 'movie_id',  'people_id');
    }
}
