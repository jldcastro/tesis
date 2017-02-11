<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nuevo Equipo</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nuevo_equipo"  method="post"  action="crear_equipo" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="id_nombre">Equipo</label>
                        <select id="id_nombre" name="id_nombre" class="form-control">
                            <?php foreach($nombres as $nombre){ ?>
                                <option value="<?= $nombre->id; ?>"><?= $nombre->equipo; ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="id_marca">Marca/Modelo</label>
                        <select id="id_marca" name="id_marca" class="form-control">
                            <?php foreach($marcas as $marca){ ?>
                                <option value="<?= $marca->id; ?>"><?= $marca->marca_modelo; ?> </option>
                            <?php } ?>
                        </select>
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
                        <label for="id_ubicacion">Lugar de almacenamiento</label>
                        <select id="id_ubicacion" name="id_ubicacion" class="form-control">
                            <?php foreach($ubicaciones as $ubicacion){ ?>
                                <option value="<?= $ubicacion->id; ?>"><?= $ubicacion->lugar_almacenamiento; ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fcompra">Fecha de compra</label>
                        <input type="date" class="form-control" id="fcompra" name="fcompra">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="norden_compra">N° Orden de compra</label>
                        <input type="text" class="form-control" id="norden_compra" name="norden_compra">
                        <span class="fa fa-shopping-cart form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="proveedor">Proveedor</label>
                        <input type="text" class="form-control" id="proveedor" name="proveedor">
                        <span class="fa fa-users form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_mantenimiento">Intervalo de Mantenimiento</label>
                        <input type="text" class="form-control" id="intervalo_mantenimiento" name="intervalo_mantenimiento">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_mantenimiento">Fecha Primer Mantenimiento</label>
                        <input type="date" class="form-control" id="fecha_mantenimiento" name="fecha_mantenimiento">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="avisar">Avisar</label>
                        <input type="text" class="form-control" id="avisar" name="avisar">
                        <span class="fa fa-exclamation-triangle form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="pauta_mantencion">Pauta de mantención</label>
                        <input type="text" class="form-control" id="pauta_mantencion" name="pauta_mantencion">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_calibracion">Intervalo de calibración</label>
                        <input type="text" class="form-control" id="intervalo_calibracion" name="intervalo_calibracion">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_verificacion">Intervalo de verificación</label>
                        <input type="text" class="form-control" id="intervalo_verificacion" name="intervalo_verificacion">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="criterio_aceptacion">Criterio de aceptación</label>
                        <input type="text" class="form-control" id="criterio_aceptacion" name="criterio_aceptacion">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="6" cols="40"></textarea>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="id_actividad">Actividad</label>
                        <select id="id_actividad" name="id_actividad" class="form-control">
                            <?php foreach($actividades as $actividad){ ?>
                                <option value="<?= $actividad->id; ?>"><?= $actividad->nombre; ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="f_realizacion">Fecha realización</label>
                        <input type="date" class="form-control" id="f_realizacion" name="f_realizacion">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="f_proxima">Fecha próxima</label>
                        <input type="date" class="form-control" id="f_proxima" name="f_proxima">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="realizado_por">Realizado por</label>
                        <input type="text" class="form-control" id="realizado_por" name="realizado_por">
                        <span class="fa fa-thumbs-up form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="ncertificado">N° de certificado</label>
                        <input type="text" class="form-control" id="ncertificado" name="ncertificado">
                        <span class="fa fa-certificate form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="observacion">Observación</label>
                        <textarea class="form-control" id="observacion" name="observacion" rows="6" cols="40"></textarea>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Registrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
