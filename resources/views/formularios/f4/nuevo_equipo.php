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
                        <label for="nserie">N° de serie</label>
                        <input type="text" class="form-control" id="nserie" name="nserie">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="cod_interno">Código Interno</label>
                        <input type="text" class="form-control" id="cod_interno" name="cod_interno">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Capacidad</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="clase_oiml">Clase OIML</label>
                        <input type="text" class="form-control" id="clase_oiml" name="clase_oiml">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="error_max">Error máximo</label>
                        <input type="text" class="form-control" id="error_max" name="error_max">
                        <span class="fa fa-remove form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="lugar_almacenamiento">Lugar de almacenamiento</label>
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
