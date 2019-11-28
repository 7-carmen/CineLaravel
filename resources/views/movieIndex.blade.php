@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->
@auth
<script type="text/javascript" src="/JS/validacion.js">
     $('select').selectpicker();
</script>
    <h2>Añadir peliculas:</h2>
    <div id="insertar">
        @if (isset($mensaje)) <!--Sentencia para mostrar los mensajes-->
            <br>
            <span>{{ $mensaje }}</span>
            <br>
        @endif
    <form action="/movie" method="post" enctype="multipart/form-data" onsubmit="return validacion()">
        @csrf
        <br /> Nombre:<br /> <input type='text' id="nombre" name='nombre'> <span id="e_nombre"></span><br />
        <br /> Duración:<br /> <input type='text' id="duracion" name='duracion'><span id="e_duracion"></span><br />
        <br /> Año: <br /> <input type='text' id="anyo" name='anyo'> <span id="e_anyo"></span><br />
        <br /> Puntuación: <br /> <input type='text' id="rating" name='rating'><span id="e_puntuacion"></span><br />
        <br /> Sinopsis: <br /> <input type='text' id="sinopsis" name='sinopsis'><span id="e_sinopsis"></span><br />
        <br /> Cartel: <br/><input type="file" id="cartel" name="cartel"><span id="e_cartel"></span><br>
        <br /> <input type="submit" value="Añadir pelicula">    

<div id="btn1">
         <h3>Generos:</h3>
            <select name="generos[]" class="selectpicker" multiple data-live-search="true" data-style="btn-default btn-lg">
                @foreach ( $generos as $generos )
                <option  value="{{ $generos->id }}">{{ $generos->nombre }}</option>   
                <!--<option name="generos[]" value="{{ $generos->id }}" selected="selected">{{ $generos->nombre }}</option>   -->
                @endforeach
            </select>
        <br /> 
        <br /> 
</div>
<div id="btn2">
       <h3>Actores:</h3>
            <select name="actores[]" class="selectpicker" multiple data-live-search="true" data-style="btn-default btn-lg">
                @foreach ( $personas as $actores )
                <option  value="{{ $actores->id }}">{{ $actores->name }}</option> 
                @endforeach
            </select>
        <br /> 
        <br /> 
</div>
<div id="btn3">
       <h3>Directores:</h3>
            <select name="directores[]"  class="selectpicker" multiple data-live-search="true" data-style="btn-default btn-lg">
                @foreach ( $personas as $directores )
                <option value="{{ $directores->id }}">{{ $directores->name }}</option>
                @endforeach
            </select>
        <br /> 
        <br /> 
        </div>
         </div>
        </form>
@endauth
@guest
<h2>No tienes permiso para estar aquí</h2>
<img id="acceso" src="/IMG/acceso_denegado.jpg" onclick="window.location.href='/inicio'"></div>
@endguest
@endsection
