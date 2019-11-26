@extends('layouts.master')
@section('contenido')
@auth
    <h2>Bienvenid@ a la página inicial de Gestión de Generos</h2>
    <div id="contenidoreal">
    <p>- Lista de generos:<p>
        @if (isset($mensaje))
            <br>
            <span>{{ $mensaje }}</span>
            <br>
        @endif
    <table border='1'>
    <tr> <th> ID </th> <th> Nombre </th><th> Eliminar </th> <th> Editar </th></tr>
        @foreach ($genero as $genero)
            <tr> 
                    <td> {{ $genero->id }} </td> 
                    <td> {{ $genero->nombre }} </td>
                    <td> <a href='/genero/{{$genero->id}}/borrar'>Eliminar</a> </td>
                    <td> <a href='/genero/{{$genero->id}}/editar'>Modificar</a> </td>
            </tr>
        @endforeach
    </table>
    <form action="/genero" method="post" enctype="multipart/form-data">
        @csrf
        <br /> Nombre:<br /> <input type='text' name='nombre'><br />
        <br /> <input type="submit" value="Añadir Genero">
    </form>    
</div>
@endauth
@guest
<h2>No tienes permiso para estar aquí</h2>
<img id="acceso" src="/IMG/acceso_denegado.jpg" onclick="window.location.href='/inicio'"></div>
@endguest
@endsection
