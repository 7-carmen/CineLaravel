@extends('layouts.master')
@section('contenido')
    <h2>Editar genero</h2>
    <div id="update">
    <form method="POST" action="/genero/{{ $genero->id }}" enctype="multipart/form-data">
        @csrf
        <!--@method("PATCH")-->
        <br/><br/>
        Nombre:<br/><input type='text' name='nombre' value={{ $genero->nombre }}><br/>
        <br /><input type='submit' value='Modificar genero'>
    </form>
    </div>
@endsection