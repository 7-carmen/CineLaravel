<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\people;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class peopleController extends Controller{
    public function index(){
        $people = people::all();
        $data['people'] = $people;
        return view("peopleIndex", $data);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $people = new people();
        $people->name = $request->get('name');
        $file = $request->file('imagen');
        $name = $file->getClientOriginalName();
        Storage::disk('cartel')->put($name, File::get($file));
        $people->imagen = $name;
        $people->save();
        $data['mensaje']="Persona añadido con exito";
        $people = people::all();
        $data['people'] = $people;
        return view("peopleIndex",$data);
    }

    public function show($id) {
        //
    }

    public function edit($id){
        $people = people::find($id);
        $data['people'] = $people;
        return view("peopleUpdate",$data);
    }

    public function update(Request $request, $id){
        $people = people::find($id);
        $people->nombre = $request->get('nombre');
        $people->save();
        $data['mensaje']="Persona modificado con exito";
        $people = people::all();
        $data['people'] = $people;
        return view("peopleIndex",$data);
    }

    public function destroy($id){
        $people = people::find($id);
        $people->delete();
        $people = people::all();
        $data['mensaje']="Persona eliminada con exito";
        $data['people'] = $people;
        return view("peopleIndex",$data);
    }
}

