<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Actualizar Datos Usuario</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_usuario"  method="post"  action="actualizar_usuario" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="name">Nombres</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $usuario->name; ?>">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="email">Correo Electrónico</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $usuario->email; ?>">
                        <span class="fa fa-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?= $usuario->apellido_paterno; ?> ">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
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
</div>
