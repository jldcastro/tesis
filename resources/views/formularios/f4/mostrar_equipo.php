<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Información Equipo</h3>
            </div><!-- /.box-header -->

            <form  id="mostrar_equipo" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_equipo" value="<?= $equipo->id; ?>">

                <div class="box-body">

                    <div class = "form-group has-feedback col-md-12">
                        <label>Imagen equipo</label>
                        <br>
                        <img src="<?= $equipo->foto ?>" width="500px">
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="equipo">Equipo</label>
                        <input type="text" class="form-control" id="id_nombre" name="id_nombre" value="<?= $equipo->nombre->equipo; ?>" disabled>
                        <span class="fa fa-briefcase form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="marca_modelo">Marca/Modelo</label>
                        <input type="text" class="form-control" id="id_marca" name="id_marca" value="<?= $equipo->marca->marca_modelo; ?>" disabled>
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="nserie">N° de serie</label>
                        <input type="text" class="form-control" id="nserie" name="nserie" value="<?= $equipo->nserie; ?>" disabled>
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="cod_interno">Código Interno</label>
                        <input type="text" class="form-control" id="cod_interno" name="cod_interno" value="<?= $equipo->cod_interno; ?>" disabled>
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Capacidad</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad" value="<?= $equipo->capacidad; ?>" disabled>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="clase_oiml">Clase OIML</label>
                        <input type="text" class="form-control" id="clase_oiml" name="clase_oiml" value="<?= $equipo->clase_oiml; ?>" disabled>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="error_max">Error máximo</label>
                        <input type="text" class="form-control" id="error_max" name="error_max" value="<?= $equipo->error_max; ?>" disabled>
                        <span class="fa fa-remove form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="lugar_almacenamiento">Lugar de almacenamiento</label>
                        <input type="text" class="form-control" id="id_ubicacion" name="id_ubicacion" value="<?= $equipo->ubicacion->lugar_almacenamiento; ?>" disabled>
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fcompra">Fecha de compra</label>
                        <input type="date" class="form-control" id="fcompra" name="fcompra" value="<?= $equipo->fcompra; ?>" disabled>
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="norden_compra">N° Orden de compra</label>
                        <input type="text" class="form-control" id="norden_compra" name="norden_compra" value="<?= $equipo->norden_compra; ?>" disabled>
                        <span class="fa fa-shopping-cart form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="proveedor">Proveedor</label>
                        <input type="text" class="form-control" id="proveedor" name="proveedor" value="<?= $equipo->proveedor; ?>" disabled>
                        <span class="fa fa-users form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_mantenimiento">Intervalo de Mantenimiento</label>
                        <input type="text" class="form-control" id="intervalo_mantenimiento" name="intervalo_mantenimiento" value="<?= $equipo->intervalo_mantenimiento; ?>" disabled>
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_mantenimiento">Fecha Primer Mantenimiento</label>
                        <input type="date" class="form-control" id="fecha_mantenimiento" name="fecha_mantenimiento" value="<?= $equipo->fecha_mantenimiento; ?>" disabled>
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="avisar">Avisar</label>
                        <input type="text" class="form-control" id="avisar" name="avisar" value="<?= $equipo->avisar; ?>" disabled>
                        <span class="fa fa-exclamation-triangle form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="pauta_mantencion">Pauta de mantención</label>
                        <input type="text" class="form-control" id="pauta_mantencion" name="pauta_mantencion" value="<?= $equipo->pauta_mantencion; ?>" disabled>
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_calibracion">Intervalo de calibración</label>
                        <input type="text" class="form-control" id="intervalo_calibracion" name="intervalo_calibracion" value="<?= $equipo->intervalo_calibracion; ?>" disabled>
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_verificacion">Intervalo de verificación</label>
                        <input type="text" class="form-control" id="intervalo_verificacion" name="intervalo_verificacion" value="<?= $equipo->intervalo_verificacion; ?>" disabled>
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="criterio_aceptacion">Criterio de aceptación</label>
                        <input type="text" class="form-control" id="criterio_aceptacion" name="criterio_aceptacion" value="<?= $equipo->criterio_aceptacion; ?>" disabled>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="6" cols="40" disabled><?= $equipo->observaciones; ?></textarea>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="id_actividad">Actividad</label>
                        <input type="text" class="form-control" id="id_actividad" name="id_actividad" value="<?= $equipo->actividad->nombre; ?>" disabled>
                        <span class="fa fa-clock-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="f_realizacion">Fecha realización</label>
                        <input type="date" class="form-control" id="f_realizacion" name="f_realizacion" value="<?= $equipo->f_realizacion; ?>" disabled>
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="f_proxima">Fecha próxima</label>
                        <input type="date" class="form-control" id="f_proxima" name="f_proxima" value="<?= $equipo->f_proxima; ?>" disabled>
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="realizado_por">Realizado por</label>
                        <input type="text" class="form-control" id="realizado_por" name="realizado_por" value="<?= $equipo->realizado_por; ?>" disabled>
                        <span class="fa fa-thumbs-up form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="ncertificado">N° de certificado</label>
                        <input type="text" class="form-control" id="ncertificado" name="ncertificado" value="<?= $equipo->ncertificado; ?>" disabled>
                        <span class="fa fa-certificate form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="observacion">Observación</label>
                        <textarea class="form-control" id="observacion" name="observacion" rows="6" cols="40" value="<?= $equipo->observacion; ?>" disabled></textarea>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
