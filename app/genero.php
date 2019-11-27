<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model{
    protected $fillable = [
        'nombre', 
    ];

    public function movies(){
        return $this->belongsToMany("App\movie", 'generos_movies', 'generos_id', 'movies_id');
    }
}
