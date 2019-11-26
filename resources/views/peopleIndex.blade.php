@extends('layouts.master')
@section('contenido')
@auth
    <h2>Bienvenid@ a la página inicial de Gestión de Personas</h2>
    <div id="contenidoreal">
    <p>- Lista de personas:<p>
        @if (isset($mensaje))
            <br>
            <span>{{ $mensaje }}</span>
            <br>
        @endif
    <table border='1'>
    <tr> <th> ID </th> <th> Nombre </th> <th> Foto </th> <th> Eliminar </th> <th> Editar </th></tr>
        @foreach ($people as $people)
            <tr> 
                    <td> {{ $people->id }} </td> 
                    <td> {{ $people->name }} </td>
                    <td> <img src= "/IMG/cartel/{{ $people->imagen }}"  width='100px' height='150px'></td> 
                    <td> <a href='/people/{{$people->id}}/borrar'>Eliminar</a> </td>
                    <td> <a href='/people/{{$people->id}}/editar'>Modificar</a> </td>
            </tr>
        @endforeach
    </table>
    <form action="/people" method="post" enctype="multipart/form-data">
        @csrf
        <br /> Nombre:<br /> <input type='text' name='name'><br />
        <br /> Foto: <br/><input type="file" name="imagen" value="{{$people->imagen ?? '' }}"><br>
        <br /> <input type="submit" value="Añadir Persona">
    </form>    
</div>
@endauth
@guest
<h2>No tienes permiso para estar aquí</h2>
<img id="acceso" src="/IMG/acceso_denegado.jpg" onclick="window.location.href='/inicio'"></div>
@endguest
@endsection
