<head>
        <link rel="stylesheet" type="text/css" href="/CSS/style.css" media="screen" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>
<div id="cabecera">
    <div><img id="logo" src="/IMG/logo.png" onclick="window.location.href='/inicio'"></div>
    <div id="page-title"><i>El cine en casa</i></div> 
    <div><img id="lupa" src="/IMG/lupa.png"></div>
    <div id="buscar">
        <input type="text" name ="buscar" value="">
        <input type="submit" name="buscar" value="Buscar">
    </div>
    @auth <!--Solo lo ven los usuarios logeados-->
    <div id="botones">
        <input type="submit" name="login" value="Añadir Pelis" onclick="window.location.href='/movie'"> 
        <input type="submit" name="registro" value="Administar Usuarios" onclick="window.location.href='/usuario'"> 
        <input type="submit" name="registro" value="Cerrar Sesión" onclick="window.location.href='/cerrar_sesion'"> 
    </div>    
    @endauth
    @guest <!--Solo lo ven los invitados-->
    <div id="botones">
        <input type="submit" name="login" value="Inicia Sesión" onclick="window.location.href='/login'"> &nbsp;&nbsp;&nbsp;&nbsp; 
        <!--<input type="submit" name="registro" value="Recomendar" onclick="window.location.href='/usuario'"> -->
    </div> 
    @endguest
</div>
<div id="contenido">
    @yield('contenido') <!--Para insertar el contenido-->
</div>