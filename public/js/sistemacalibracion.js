function form_usuario(argumento){
//funcion para cargar formularios del sistema

		if(argumento==1)
            {
                var ruta = "nuevo_usuario";
            }

		$("#contenido_principal").html($("#cargador").html());
		   
		    $.get(ruta,function(resultado){
		        $("#contenido_principal").html(resultado);
		    })
}

function lista_usuarios(lista){
//funcion para cargar el listado de usuarios

        if(lista==1)
            {
                var ruta = "lista_usuarios";
            }

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

function mostrar_usuario(id_usuario) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "mostrar_usuario/"+id_usuario+"";

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
        
        if(usuario=="nuevo_usuario"){ var ruta="crear_usuario"; var nota="notificacion"; }

        if(usuario=="editar_usuario"){ var ruta="actualizar_usuario"; var nota="notificacion"; }

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

