function formularios(argumento){
//funcion para cargar formularios del sistema

		if(argumento==1)
        {
            var url = "nuevo_usuario";
        }

		$("#contenido_principal").html($("#cargador").html());
		   
		    $.get(url,function(resultado){
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