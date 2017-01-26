<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nueva Ubicación</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nueva_ubicacion"  method="post"  action="crear_ubicacion" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="lugar_almacenamiento">Lugar almacenamiento</label>
                        <input type="text" class="form-control" id="lugar_almacenamiento" name="lugar_almacenamiento">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Registrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
