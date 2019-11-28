@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->
<video width="600" height="400" controls>
    <source src="/Videos/prueba.mp4" type="video/mp4">
</video>
@endsection