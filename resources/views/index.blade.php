@extends('layouts.master') <!--Extiende desde master que contiene la cabecera.-->
@section('contenido') <!--Dentro se coloca el contenido que se incrustará en el master. -->
<h2><i>Peliculas:</i></h2>   
<div id="mensaje">
        @if (isset($mensaje)) <!--Sentencia para mostrar los mensajes-->
        <br>
        <span>{{ $mensaje }}</span>
        <br>
    @endif
</div>
<div id="cuerpo">
    @foreach($movie as $pelis)
        @auth
        <div id = 'pelis'> <img src="{{ $pelis->cartel }}"> <span class='titulo'>{{$pelis->nombre}}</span> <br/><span>{{$pelis->anyo}}</span> <br/><span><a href='/movie/{{$pelis->id}}'>Ver</a></span> <span><a href='/movie/{{$pelis->id}}/editar'>Editar</a></span> <span><a id="{{$pelis->id}}" class="delete">Eliminar</a></span>  </div>    
        @endauth
        @guest
        <div id = 'pelis'> <img src="{{ $pelis->cartel }}"> <span class='titulo'>{{$pelis->nombre}}</span> <br/><span>{{$pelis->anyo}}</span> <br/><span><a href='/movie/{{$pelis->id}}'>Ver</a></div>    
        @endguest
    @endforeach
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function(){
        //.delete es el nombre de la clase
        //peticion_http es el objeto que creamos de Ajax
        $(".delete").click(function(){
            //alert("haago click")
            id = $(this).attr("id");
            elementoD = $(this);
            peticion_http = new XMLHttpRequest();
            peticion_http.onreadystatechange = function(){
                //alert(peticion_http.readyState);
                //alert(peticion_http.status)
                if(peticion_http.readyState == 4 && peticion_http.status == 200){
                     $(elementoD).parent().parent().remove();
                }
            };
            url='http://localhost:3000/movie/'+id+'/borrar';
            //alert(url);
            peticion_http.open('GET', url, true);
            peticion_http.send();
        })
    })
</script>
@endsection
