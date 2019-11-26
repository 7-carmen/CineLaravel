@extends('layouts.master')
@section('contenido')
@auth
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
@endauth
@guest
<h2>No tienes permiso para estar aquí</h2>
<img id="acceso" src="/IMG/acceso_denegado.jpg" onclick="window.location.href='/inicio'"></div>
@endguest
@endsection