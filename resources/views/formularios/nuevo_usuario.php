<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nuevo Usuario</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nuevo_usuario"  method="post"  action="crear_usuario" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="codigo_usuario">Código Usuario*</label>
                        <input type="text" class="form-control" id="codigo_usuario" name="codigo_usuario">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="name">Nombres*</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="email">Correo Electrónico*</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <span class="fa fa-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="password">Contraseña*</label>
                        <input type="password" class="form-control" id="password" name="password" p required >
                        <span class="fa fa-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="password_confirmation">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" p required >
                        <span class="fa fa-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="apellido_paterno">Apellido Paterno*</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="apellido_materno">Apellido Materno*</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="rut_usuario">Rut*</label>
                        <input type="text" class="form-control" id="rut_usuario" name="rut_usuario">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Registrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
