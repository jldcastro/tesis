<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Información Personal Usuario</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="mostrar_usuario" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">

                <div class="box-body">

                    <div class="form-group has-feedback col-md-12">
                        <label for="codigo_usuario">Código Usuario</label>
                        <input type="text" class="form-control" id="codigo_usuario" name="codigo_usuario" value="<?= $usuario->codigo_usuario; ?>" disabled>
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="name">Nombres</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $usuario->name; ?>" disabled>
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="email">Correo Electrónico</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $usuario->email; ?>" disabled>
                        <span class="fa fa-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="apellido_paterno">Apellido Paterno*</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?= $usuario->apellido_paterno; ?> " disabled>
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="apellido_materno">Apellido Materno*</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="<?= $usuario->apellido_materno; ?>" disabled>
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="rut_usuario">Rut</label>
                        <input type="text" class="form-control" id="rut_usuario" name="rut_usuario" value="<?= $usuario->rut_usuario; ?>" disabled>
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
