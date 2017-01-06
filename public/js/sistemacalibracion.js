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

function form_equipo(argumento){
//funcion para cargar formularios del sistema

    if(argumento==1)
    {
        var ruta = "nuevo_equipo";
    }

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function lista_equipos(lista){
//funcion para cargar el listado de usuarios

    if(lista==1)
    {
        var ruta = "lista_equipos";
    }

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

 $(document).on("submit",".formulario",function(e){
//funcion para atrapar los formularios y enviar los datos

     e.preventDefault();
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formulario=$(this);
        var usuario=$(this).attr("id");
        
        if(usuario=="nuevo_usuario"){ var ruta="crear_usuario"; var nota="notificacion"; }
   
        $("#"+nota+"").html($("#cargador").html());

              $.ajax({

                    type: "POST",
                    url : ruta,
                    datatype:'json',
                    data : formulario.serialize(),
                    success : function(resultado){

                        $("#"+nota+"").html(resultado);
                        $('#'+usuario+'').trigger("reset");
                    }
                });
})

$(document).on("submit",".formulario",function(e){
//funcion para atrapar los formularios y enviar los datos

    e.preventDefault();
    $('html, body').animate({scrollTop: '0px'}, 200);

    var formulario=$(this);
    var equipo=$(this).attr("id");

    if(equipo=="nuevo_equipo"){ var ruta="crear_equipo"; var nota="notificacion"; }

    $("#"+nota+"").html($("#cargador").html());

    $.ajax({

        type: "POST",
        url : ruta,
        datatype:'json',
        data : formulario.serialize(),
        success : function(resultado){

            $("#"+nota+"").html(resultado);
            $('#'+equipo+'').trigger("reset");
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