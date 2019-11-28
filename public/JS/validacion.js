const validacion = () => {
    const aviso = `Debe rellenar este campo.`;
        //Nombre:
         var nombre = document.getElementById("nombre");
        if (nombre.value == "") {
            document.getElementById("e_nombre").innerHTML = aviso;
            return false;
        }else{
            document.getElementById("e_nombre").innerHTML = "";
        } 
        //Duración:
        var duracion = document.getElementById("duracion");
        var v_duracion = /^\d+$/;
        if(duracion.value==""){
            ducument.getElementById("e_duracion").innerHTML = aviso;
            return false;
        }else if(!v_duracion.test(duracion.value)){
            ducument.getElementById("e_duracion").innerHTML = "Debes de introducir caracteres numericos";
            return false;
        }else{
            ducument.getElementById("e_duracion").innerHTML = "";
        }
        //Año
        var año = document.getElementById("anyo");
         var re_año = /^\d{4}$/;
        if (año.value == "") {
            document.getElementById("e_anyo").innerHTML = aviso;
            return false;
        } else if (!re_año.test(año.value)) {
            document.getElementById("e_anyo").innerHTML = "Escriba el año en formato \"0000\"";
            return false;
        }else{ 
            document.getElementById("e_anyo").innerHTML = "";
        }
        //Puntuación
         var puntuacion = document.getElementById("puntuacion");
        if (puntuacion.value == "") {
            document.getElementById("e_puntuacion").innerHTML = aviso;
            return false;
        }else{
            document.getElementById("e_puntuacion").innerHTML = "";
        } 
        //Sinopsis
         var sinopsis = document.getElementById("sinopsis");
        if (sinopsis.value == "") {
            document.getElementById("e_sinopsis").innerHTML = aviso;
            return false;
        }else{
            document.getElementById("e_sinopsis").innerHTML = "";
        } 
        //Cartel
          var cartel = document.getElementById("cartel");
        if (cartel.value == "") {
            document.getElementById("e_cartel").innerHTML = aviso;
            return false;
        }else{
            document.getElementById("e_cartel").innerHTML = "";
        } 
    }