<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller;

    class Hola extends Controller{
        public function index($nombre){
            $data["nombre"] = $nombre;
            return view("hola", $data);
        }
    }