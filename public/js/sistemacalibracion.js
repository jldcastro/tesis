function agregar(argumento){
//funcion para cargar formularios del sistema

		if(argumento==1){var ruta = "nuevo_usuario";}
        if(argumento==2){var ruta = "nuevo_equipo";}
        if(argumento==3){var ruta = "nuevo_nombre";}
        if(argumento==4){var ruta = "nueva_marca";}
        if(argumento==5){var ruta = "nueva_ubicacion";}

		$("#contenido_principal").html($("#cargador").html());
		   
		    $.get(ruta,function(resultado){
		        $("#contenido_principal").html(resultado);
		    })
}

function listas(lista){
//funcion para cargar el listado de usuarios

        if(lista==1){var ruta = "lista_usuarios";}
        if(lista==2){var ruta = "lista_equipos";}
        if(lista==3){var ruta = "lista_nombres";}
        if(lista==4){var ruta = "lista_marcas";}
        if(lista==5){var ruta = "lista_ubicaciones";}

        $("#contenido_principal").html($("#cargador").html());

            $.get(ruta,function(resultado){
                $("#contenido_principal").html(resultado);
            })
}

function editar_usuario(id_usuario) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "editar_usuario/"+id_usuario+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_equipo(id_equipo) {
//funcion para mostrar y actualizar la informacion de un equipo

    var ruta = "editar_equipo/"+id_equipo+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_nombre(id_nombre) {
//funcion para mostrar y actualizar la informacion de un nombre

    var ruta = "editar_nombre/"+id_nombre+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_marca(id_marca) {
//funcion para mostrar y actualizar la informacion de una marca

    var ruta = "editar_marca/"+id_marca+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_ubicacion(id_ubicacion) {
//funcion para mostrar y actualizar la informacion de un lugar de almacenamiento

    var ruta = "editar_ubicacion/"+id_ubicacion+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

$(document).on("click",".div_modal",function(e){
    //funcion para ocultar las capas modales
    $("#capa_modal").hide();
    $("#capa_para_edicion").hide();
    $("#capa_para_edicion").html("");
})

function mostrar_usuario(id_usuario) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "mostrar_usuario/"+id_usuario+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function mostrar_equipo(id_equipo) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "mostrar_equipo/"+id_equipo+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

 $(document).on("submit",".formulario",function(e){
//funcion para atrapar el formulario de usuarios y enviar los datos

     e.preventDefault();
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formulario=$(this);
        var usuario=$(this).attr("id");
        var equipo=$(this).attr("id");
        var nombre=$(this).attr("id");
        var marca=$(this).attr("id");
        var ubicacion=$(this).attr("id");

        if(usuario=="nuevo_usuario"){ var ruta="crear_usuario"; var nota="notificacion"; }
        if(equipo=="nuevo_equipo"){ var ruta="crear_equipo"; var nota="notificacion"; }
        if(nombre=="nuevo_nombre"){ var ruta="crear_nombre"; var nota="notificacion"; }
        if(marca=="nueva_marca"){ var ruta="crear_marca"; var nota="notificacion"; }
        if(ubicacion=="nueva_ubicacion"){ var ruta="crear_ubicacion"; var nota="notificacion"; }


        if(usuario=="editar_usuario"){ var ruta="actualizar_usuario"; var nota="notificacion"; }
        if(equipo=="editar_equipo"){ var ruta="actualizar_equipo"; var nota="notificacion"; }
        if(nombre=="editar_nombre"){ var ruta="actualizar_nombre"; var nota="notificacion"; }
        if(marca=="editar_marca"){ var ruta="actualizar_marca"; var nota="notificacion"; }
        if(ubicacion=="editar_ubicacion"){ var ruta="actualizar_ubicacion"; var nota="notificacion"; }

        if(usuario=="cambiar_contrasena"){ var ruta="cambiar_contrasena"; var nota="notificacion_contrasena"; }

     $("#"+nota+"").html($("#cargador").html());

              $.ajax({

                    type: "POST",
                    url : ruta,
                    datatype:'json',
                    data : formulario.serialize(),
                    success : function(resultado){

                        $("#"+nota+"").html(resultado);
                        if(usuario==nuevo_usuario){
                            $('#'+usuario+'').trigger("reset");
                        }

                        if(equipo==nuevo_equipo){
                            $('#'+equipo+'').trigger("reset");
                        }

                        if(nombre==nuevo_nombre){
                            $('#'+nombre+'').trigger("reset");
                        }

                        if(marca==nueva_marca){
                            $('#'+marca+'').trigger("reset");
                        }

                        if(ubicacion==nueva_ubicacion){
                            $('#'+ubicacion+'').trigger("reset");
                        }

                    }
                });
})

//funcion para indicar correctamente la paginación
$(document).on("click",".pagination li a",function(e){

    e.preventDefault();

    var ruta =$( this).attr("href");
    $("#contenido_principal").html($("#cargador").html());


    $.get(ruta,function(resultado){

        $("#contenido_principal").html(resultado);
    })
})

$(document).on("submit",".imagenes",function(e){


    e.preventDefault();
    var formu=$(this);
    var nombreform=$(this).attr("id");

    if(nombreform=="subir_imagen" ){ var ruta="imagen_usuario";  var nota="notificacion_imagen"}
    if(nombreform=="subir_equipo" ){ var ruta="imagen_equipo";  var nota="notificacion_imagen"}
    //información del formulario
    var formData = new FormData($("#"+nombreform+"")[0]);

    //hacemos la petición ajax
    $.ajax({
        url: ruta,
        type: 'POST',

        // Form data
        //datos del formulario
        data: formData,
        //necesario para subir archivos via ajax
        cache: false,
        contentType: false,
        processData: false,
        //mientras enviamos el archivo
        beforeSend: function(){
            $("#"+nota+"").html($("#cargador").html());
        },
        //una vez finalizado correctamente
        success: function(data){
            $("#"+nota+"").html(data);
            $("#foto").attr('src', $("#foto").attr('src') + '?' + Math.random() );
        },
        //si ha ocurrido un error
        error: function(data){
            alert("Ha ocurrido un error") ;

        }
    });
});

function eliminar_usuario(argumento) {

    var ruta = "eliminar_usuario/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(1);
    })
}

function eliminar_equipo(argumento) {

    var ruta = "eliminar_equipo/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(2);
    })
}

function eliminar_nombre(argumento) {

    var ruta = "eliminar_nombre/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(3);
    })
}

function eliminar_marca(argumento) {

    var ruta = "eliminar_marca/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(4);
    })
}

function eliminar_ubicacion(argumento) {

    var ruta = "eliminar_ubicacion/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(5);
    })
}




