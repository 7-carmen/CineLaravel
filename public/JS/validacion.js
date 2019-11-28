const validacion = () => {
    const aviso = `Debe rellenar este campo.`;
    let enviar = true;
        //Nombre:
         var nombre = document.getElementById("nombre");
        if (nombre.value == "") {
            document.getElementById("e_nombre").innerHTML = aviso;
            enviar = false;
        }else{
            document.getElementById("e_nombre").innerHTML = "";
        } 
        //Duración:
        var duracion = document.getElementById("duracion");
        var v_duracion = /^\d+$/;
        console.log("Duración: "+duracion);
        if(duracion.value==""){
            document.getElementById("e_duracion").innerHTML = aviso;
            console.log("hola");
            enviar = false;
        }else if(!v_duracion.test(duracion.value)){
            document.getElementById("e_duracion").innerHTML = "Debes de introducir caracteres numericos";
            enviar = false;
        }else{
            document.getElementById("e_duracion").innerHTML = "";
        }
        //Año
        var año = document.getElementById("anyo");
         var re_año = /^\d{4}$/;
        if (año.value == "") {
            document.getElementById("e_anyo").innerHTML = aviso;
            enviar = false;
        } else if (!re_año.test(año.value)) {
            document.getElementById("e_anyo").innerHTML = "Escriba el año en formato \"0000\"";
            enviar = false;
        }else{ 
            document.getElementById("e_anyo").innerHTML = "";
        }
        //Puntuación
         var puntuacion = document.getElementById("rating");
        if (puntuacion.value == "") {
            document.getElementById("e_puntuacion").innerHTML = aviso;
            enviar = false;
        }else{
            document.getElementById("e_puntuacion").innerHTML = "";
        } 
        //Sinopsis
         var sinopsis = document.getElementById("sinopsis");
        if (sinopsis.value == "") {
            document.getElementById("e_sinopsis").innerHTML = aviso;
            enviar = false;
        }else{
            document.getElementById("e_sinopsis").innerHTML = "";
        } 
        //Cartel
          var cartel = document.getElementById("cartel");
        if (cartel.value == "") {
            document.getElementById("e_cartel").innerHTML = aviso;
            enviar = false;
        }else{
            document.getElementById("e_cartel").innerHTML = "";
        } 

        return enviar;
    }