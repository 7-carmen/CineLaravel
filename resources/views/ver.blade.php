@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->
<video id="video" width="1500" height="700" controls>
    <source src="/Videos/prueba.mp4" type="video/mp4">
</video>
<!--<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/"
name="mediaplayer1" ShowStatusBar="true" EnableContextMenu="false" autostart="false"
height="330" width="360" loop="false" src="/Videos/prueba.avi" />-->
@endsection