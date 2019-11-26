@extends('layouts.master')
@section('contenido')
    @auth
    <h2>Bienvenid@ a la página inicial de Gestión de Usuarios</h2>
    <div id="contenidoreal">
    <p>- Lista de usuarios:<p>
        @if (isset($mensaje))
            <br>
            <span>{{ $mensaje }}</span>
            <br>
        @endif
    <table border='1'>
    <tr> <th> ID </th><th> Nombre </th><th> Correo </th> <th> Contraseña </th> <th> Eliminar </th> <th> Editar </th></tr>
        @foreach ($users as $user)
            <tr> 
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->password }} </td>
                    <td> <a href='/usuario/{{$user->id}}/borrar'>Eliminar</a> </td>
                    <td> <a href='/usuario/{{$user->id}}/editar'>Modificar</a> </td>
            </tr>
        @endforeach
    </table>
    <form action="/usuario" method="post">
        @csrf
        <br /> Nombre: <br /> <input type='text' name='name'><br />
        <br /> Correo: <br /> <input type='text' name='email'><br />
        <br /> Contraseña:<br /> <input type='password' name='password'><br />
        <br /> <input type="submit" value="Añadir usuario">
    </form>
</div>
@endauth
@guest
<h2>No tienes permiso para estar aquí</h2>
<img id="acceso" src="/IMG/acceso_denegado.jpg" onclick="window.location.href='/inicio'"></div>
@endguest
@endsection
