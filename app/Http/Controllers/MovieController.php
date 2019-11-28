<?php

namespace App\Http\Controllers;

use App\movie;
use App\genero;
use App\people;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MovieController extends Controller{
    public function index()
    {
        $movie = movie::all();
        $generos = genero::all();
        $personas = people::all(); 
        $data["generos"] = $generos;
        $data["personas"] = $personas;
        $data["movie"] = $movie;
        return view("movieIndex", $data);
    }

    public function index2()
    {
        $movie = movie::all();
        $data['movie'] = $movie;
        return view("index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $movie = new movie();
        $file = $request->file('cartel');
        $name = $file->getClientOriginalName();
        Storage::disk('cartel')->put($name, File::get($file));
        $movie->cartel = "/IMG/cartel/".$name;
        $movie->nombre = $request->get('nombre');
        $movie->duracion = $request->get('duracion');
        $movie->anyo = $request->get('anyo');
        $movie->sinopsis = $request->get('sinopsis');
        $movie->rating = $request->get('rating');
        $movie->save();
        $movie ->generos()->attach($request->generos);
        $movie->actores()->attach($request->actores);
        $movie->directores()->attach($request->directores);
        $data['mensaje']="Pelicula añadido con exito";
        $movie = movie::all();
        $data['movie'] = $movie;
        return view("index",$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = movie::find($id);
        $data['movie'] = $movie;
       return view("movieDatos",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $movie = movie::find($id);
        $generos = genero::all();
        $personas = people::all(); 
        $data["generos"] = $generos;
        $data["personas"] = $personas;
        $data['movie'] = $movie;
        return view("movieUpdate",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $movie = movie::find($id);
        /*$file = $request->file('cartel');
        $name = $file->getClientOriginalName();
        Storage::disk('cartel')->put($name, File::get($file));
        $movie->cartel = "/IMG/cartel/"+$name;*/
        $movie->nombre = $request->nombre;
        $movie->duracion = $request->duracion;
        $movie->anyo = $request->anyo;
        $movie->save();
        $movie ->generos()->sync($request->generos);
        $movie->actores()->sync($request->actores);
        $movie->directores()->sync($request->directores);
        $movie = movie::find($id);
        $data['mensaje']="Pelicula modificada con exito";
        $data['movie'] = $movie;
        return view("movieDatos",$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id){
        $movie = movie::find($id);
        $movie->delete();
        // $movie = movie::all();
        // $data['mensaje']="Pelicula eliminada con exito";
        // $data['movie'] = $movie;
        // return view("index",$data);
        echo "1";
    }

    public function search(Request $request){
        $movie = movie::where('nombre', 'like', "%".$request->buscar."%")
                        ->orWhere('anyo', 'like',"%".$request->buscar."%")
                        ->get();
        $data["movie"] = $movie;
        if(sizeof($movie)==0){
            $data["mensaje"]="No se han encontrado resultados para la busqueda";
        }else{
            $data["mensaje"]="Resultados:";
        }
        return \view("index",$data);
    }

    public function search_anyo(Request $request){
        $movie = movie::where('anyo', 'like',"%".$request->buscar."%")->get();
        $data["movie"] = $movie;
        return \view("index",$data);
    }

    public function search_genero(Request $request){
        $movie = genero::find($request->buscar)->movies;
        //dd($movie);
        $data["movie"] = $movie;
        return view("index", $data);
    }

    public function search_actores(Request $request){
        $movie = people::find($request->buscar)->actores;
        //dd($movie);
        $data["movie"] = $movie;
        return view("index", $data);
    }

    public function search_directores(Request $request){
        $movie = people::find($request->buscar)->directores;
        $data["movie"] = $movie;
        return view("index", $data);
    }
    
}
