<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genero;

class generoController extends Controller
{
    public function index(){
        $genero = genero::all();
        $data['genero'] = $genero;
        return view("generoIndex", $data);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $genero = new genero();
        $genero->nombre = $request->get('nombre');
        $genero->save();
        $data['mensaje']="Genero añadido con exito";
        $genero = genero::all();
        $data['genero'] = $genero;
        return view("generoIndex",$data);
    }

    public function show($id) {
        //
    }

    public function edit($id){
        $genero = genero::find($id);
        $data['genero'] = $genero;
        return view("generoUpdate",$data);
    }

    public function update(Request $request, $id){
        $genero = genero::find($id);
        $genero->nombre = $request->get('nombre');
        $genero->save();
        $data['mensaje']="Genero modificado con exito";
        $genero = genero::all();
        $data['genero'] = $genero;
        return view("generoIndex",$data);
    }

    public function destroy($id){
        $genero = genero::find($id);
        $genero->delete();
        $genero = genero::all();
        $data['mensaje']="Genero eliminada con exito";
        $data['genero'] = $genero;
        return view("generoIndex",$data);
    }}
