@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->

    <script>
        $('select').selectpicker();
    </script>

    <h2>{{$movie->nombre}}</h2>
    <div id="carteles1">
        <img src= "{{ $movie->cartel }}"  width='300px' height='450px'>
    </div>
    <form method="POST" action="/movie/{{ $movie->id }}" enctype="multipart/form-data">
            @csrf
    <div id="info">
        Nombre:<br/><input type='text' name='nombre' value='{{ $movie->nombre }}'><br/>
        <br />Año de estreno:<br /> <input type='text' name='anyo' value={{ $movie->anyo }}><br />
        <br />Duracion:<br /> <input type='text' name='duracion' value={{ $movie->duracion }}><br />
        <br />Duracion:<br /> <input type='text' name='rating' value={{ $movie->rating }}><br />
        <br />Sinopsis:<br /><textarea name="sinopsis" rows="10" cols="40" >{{ $movie->sinopsis }}</textarea><!-- <input type='text' name='sinopsis' value={{ $movie->sinopsis }}>--><br />
        <!--<br />Cartel:<br /><input type="file" name="cartel" value="{{$movie->cartel ?? '' }}">--><br>
    </div>
    <div id="btn">
        <h3>Generos:</h3>
            <select class="selectpicker" multiple data-live-search="true" data-style="btn-default btn-lg">
                @foreach ( $generos as $generos )
                <option name="generos[]" value="{{ $generos->id }}">{{ $generos->nombre }}</option>   
                <!--<option name="generos[]" value="{{ $generos->id }}" selected="selected">{{ $generos->nombre }}</option>   -->
                @endforeach
            </select>
        <br /> 
        <br /> 
        <h3>Actores:</h3>
            <select class="selectpicker" multiple data-live-search="true" data-style="btn-default btn-lg">
                @foreach ( $personas as $actores )
                <option name="actores[]" value="{{ $actores->id }}">{{ $actores->name }}</option> 
                @endforeach
            </select>
        <br /> 
        <br /> 
        <h3>Directores:</h3>
            <select class="selectpicker" multiple data-live-search="true" data-style="btn-default btn-lg">
                @foreach ( $personas as $directores )
                <option name="directores[]" value="{{ $directores->id }}">{{ $directores->name }}</option>
                @endforeach
            </select>
        <br /> 
        <br /> 
        <input type="submit" name="edit" value=" Guardar">
        </form>
        <input type="button" name="cancel" value="Cancelar" onclick="window.location.href='/inicio'"><br />    
    </div>
@endsection
