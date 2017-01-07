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
    $("#capa_modal").show();
    $("#capa_para_edicion").show();
    var ruta = "editar_usuario/"+id_usuario+"";
    $("#capa_para_edicion").html($("#cargador").html());
    $.get(ruta,function(resultado){
        $("#capa_para_edicion").html(resultado);
    })
}

function mostrar_usuario(id_usuario) {
//funcion para mostrar y actualizar la informacion de un usuario
    $("#capa_modal").show();
    $("#capa_para_edicion").show();
    var ruta = "mostrar_usuario/"+id_usuario+"";
    $("#capa_para_edicion").html($("#cargador").html());
    $.get(ruta,function(resultado){
        $("#capa_para_edicion").html(resultado);
    })
}

$(document).on("click",".div_modal",function(e){
//funcion para ocultar las capas modales
    $("#capa_modal").hide();
    $("#capa_para_edicion").hide();
    $("#capa_para_edicion").html("");

})

 $(document).on("submit",".formulario",function(e){
//funcion para atrapar el formulario de usuarios y enviar los datos

     e.preventDefault();
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formulario=$(this);
        var usuario=$(this).attr("id");
        
        if(usuario=="nuevo_usuario"){ var ruta="crear_usuario"; var nota="notificacion"; }

        if(usuario=="editar_usuario"){ var ruta="actualizar_usuario"; var nota="notificacion"; }
   
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