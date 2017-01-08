<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Actualizar Datos Usuario</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_usuario"  method="post"  action="actualizar_usuario" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-xs-12">
                        <label for="name">Nombres</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $usuario->name; ?>">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-xs-12">
                        <label for="email">Correo Electrónico</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $usuario->email; ?>">
                        <span class="fa fa-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-xs-12">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?= $usuario->apellido_paterno; ?> ">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-xs-12">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="<?= $usuario->apellido_materno; ?>">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Cambiar Imagen Perfil</h3>
            </div><!-- /.box-header -->

            <div id="notificacion_imagen"></div>

            <form  id="subir_imagen" name="subir_imagen" method="post"  action="imagen_usuario" class="imagenes" enctype="multipart/form-data" >
                <input type="hidden" name="usuario_foto" value="<?= $usuario->id; ?>">
                <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">
                <div class="box-body">

                    <div class="form-group col-xs-12" >
                        <?php if($usuario->foto==""){ $usuario->foto="imagenes/usuarios/perfil.png"; }?>
                        <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:160px;height:160px;" id="foto" >
                        <!-- User image -->
                    </div>

                    <div class="form-group col-xs-12"  >
                        <label>Agregar Imagen Perfil</label>
                        <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
                    </div>

                    <div class="box-footer">
                        <button type="submit" class=".btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    <!-- end col mod 6 -->

    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Cambiar Contraseña</h3>
            </div><!-- /.box-header -->

            <div id="notificacion_contrasena"></div>
            <!-- form start -->
            <form method="post" id="cambiar_contrasena" class="formulario" action="cambiar_contrasena" >
                <input type="hidden" name="usuario_contrasena" value="<?= $usuario->id; ?>">
                <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">
                <div class="box-body">

                    <div class="form-group">
                        <label for="email_usuario">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email_usuario" name="email_usuario" value="<?= $usuario->email; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="password_usuario">Contraseña</label>
                        <input type="password" class="form-control" id="password_usuario" name="password_usuario">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>

    </div>
</div>
