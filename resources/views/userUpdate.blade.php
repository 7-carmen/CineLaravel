@extends('layouts.master')
@section('contenido')
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
@endsection
