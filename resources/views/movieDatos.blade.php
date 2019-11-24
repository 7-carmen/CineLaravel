@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->
<h2>{{$movie->nombre}}</h2>
@if (isset($mensaje)) <!--Sentencia para mostrar los mensajes-->
<br>
<span>{{ $mensaje }}</span>
<br>
@endif
    <div id="carteles">
        <img src= "{{ $movie->cartel }}"  width='300px' height='450px'>
    </div>
    <div id="unoinfo">
            <p><b>Sinopsis:</b> {{$movie->sinopsis}} </p>
    </div>
    <div id="dosinfo">
            <p> <b>Año de estreno:</b> {{ $movie->anyo }}</p>
            <p> <b>Duracion:</b> {{ $movie->duracion }}</p>
            <p> <b>Generos:</b></p>
            <ul>
            @foreach ( $movie->generos as $generos )
                <li>{{ $generos->nombre }}</li>
            @endforeach
            </ul>
            <p> <b>Actores:</b></p>
            <ul>
            @foreach ( $movie->actores as $actores )
                <li>{{ $actores->name }}</li>
            @endforeach
            </ul>
            <p> <b>Directores:</b></p>
            <ul>
            @foreach ( $movie->directores as $directores )
                <li>{{ $directores->name }}</li>
            @endforeach
            </ul>
            <p> <b>Puntuación:</b> {{ $movie->rating }}</p>
    </div>
    @auth
     <div id="btn-datos">
        <br/><input type="submit" name="eliminar" value="Eliminar" onclick="window.location.href='/movie/{{$movie->id}}/borrar'"><br />
        <br/><input type="submit" name="editar" value="Editar" onclick="window.location.href='/movie/{{$movie->id}}/editar'"><br />
        <br/><input type="submit" name="ver" value="Ver" onclick="window.location.href='''"><br /> <!--Incluir ruta para ver la pelicula.-->
    </div>
    @endauth
    @guest
    <div id="btn-datos">
        <br/><input type="submit" name="ver" value="Ver" onclick="window.location.href='''"><br /> <!--Incluir ruta para ver la pelicula.-->
    </div> 
    @endguest
@endsection