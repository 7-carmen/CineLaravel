@extends('layouts.master')
@section('contenido')
@auth
    <h2>Editar Usuario</h2>
    <div id="update">
    <form method="POST" action="/usuario/{{ $user->id }}">
        @csrf
        <br/><br/>
        <br />Contraseña del usuario:<br /> <input type='text' name='password' value={{ $user->password }}><br />
        <br />Nombre:<br /> <input type='text' name='name' value={{ $user->name }}><br />
        <br />Correo:<br /> <input type='text' name='email' value={{ $user->email }}><br />
        <br /><input type='submit' value='Modificar usuario'>
    </form>
    </div>
@endauth
@guest
<h2>No tienes permiso para estar aquí</h2>
<img id="acceso" src="/IMG/acceso_denegado.jpg" onclick="window.location.href='/inicio'"></div>
@endguest
@endsection
