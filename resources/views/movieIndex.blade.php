@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->
    <h2>Añadir peliculas:</h2>
    <div id="insertar">
        @if (isset($mensaje)) <!--Sentencia para mostrar los mensajes-->
            <br>
            <span>{{ $mensaje }}</span>
            <br>
        @endif
    <form action="/movie" method="post" enctype="multipart/form-data">
        @csrf
        <br /> Nombre:<br /> <input type='text' name='nombre'><br />
        <br /> Duración:<br /> <input type='text' name='duracion'><br />
        <br /> Año: <br /> <input type='text' name='anyo'><br />
        <br /> Puntuación: <br /> <input type='text' name='rating'><br />
        <br /> Sinopsis: <br /> <input type='text' name='sinopsis'><br />
        <br /> Cartel: <br/><input type="file" name="cartel"><br>
        <br /> <input type="submit" value="Añadir pelicula">    
</div>
<div id="btn1">
        <h3>Generos:</h3>
            @foreach ( $generos as $generos )
            <input type="checkbox" name="generos[]" value="{{ $generos->id }}">{{ $generos->nombre }}
            <!--En el name necesita [] por que es una colección.-->
            <br>    
            @endforeach
        <br/>
</div>
<div id="btn2">
        <h3>Actores:</h3>
            @foreach ( $personas as $actores )
            <input type="checkbox" name="actores[]" value="{{ $actores->id }}">{{ $actores->name }}
            <br>    
            @endforeach
        <br/>
</div>
<div id="btn3">
        <h3>Directores:</h3>
            @foreach ( $personas as $directores )
            <input type="checkbox" name="directores[]" value="{{ $directores->id }}">{{ $directores->name }}
            <br>    
            @endforeach
        <br/>
         </div>
        </form>
    @endsection
