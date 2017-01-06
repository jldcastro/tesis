<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nuevo Equipo</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nuevo_equipo"  method="post"  action="crear_equipo" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="equipo">Equipo</label>
                        <input type="text" class="form-control" id="equipo" name="equipo">
                        <span class="fa fa-briefcase form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="marca_modelo">Marca/Modelo</label>
                        <input type="text" class="form-control" id="marca_modelo" name="marca_modelo">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="marca_modelo">Marca/Modelo</label>
                        <input type="text" class="form-control" id="marca_modelo" name="marca_modelo">
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
