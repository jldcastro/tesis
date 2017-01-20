<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Actualizar datos Equipo</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_equipo" method="post"  action="actualizar_equipo" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_equipo" value="<?= $equipo->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="equipo">Equipo</label>
                        <input type="text" class="form-control" id="equipo" name="equipo" value="<?= $equipo->equipo; ?>">
                        <span class="fa fa-briefcase form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="marca_modelo">Marca/Modelo</label>
                        <input type="text" class="form-control" id="marca_modelo" name="marca_modelo" value="<?= $equipo->marca_modelo; ?>">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="nserie">N° de serie</label>
                        <input type="text" class="form-control" id="nserie" name="nserie" value="<?= $equipo->nserie; ?>">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="cod_interno">Código Interno</label>
                        <input type="text" class="form-control" id="cod_interno" name="cod_interno" value="<?= $equipo->cod_interno; ?>">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Capacidad</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad" value="<?= $equipo->capacidad; ?>">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="clase_oiml">Clase OIML</label>
                        <input type="text" class="form-control" id="clase_oiml" name="clase_oiml" value="<?= $equipo->clase_oiml; ?>">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="error_max">Error máximo</label>
                        <input type="text" class="form-control" id="error_max" name="error_max" value="<?= $equipo->error_max; ?>">
                        <span class="fa fa-remove form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="lugar_almacenamiento">Lugar de almacenamiento</label>
                        <input type="text" class="form-control" id="lugar_almacenamiento" name="lugar_almacenamiento" value="<?= $equipo->lugar_almacenamiento; ?>">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fcompra">Fecha de compra</label>
                        <input type="date" class="form-control" id="fcompra" name="fcompra" value="<?= $equipo->fcompra; ?>">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="norden_compra">N° Orden de compra</label>
                        <input type="text" class="form-control" id="norden_compra" name="norden_compra" value="<?= $equipo->norden_compra; ?>">
                        <span class="fa fa-shopping-cart form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="proveedor">Proveedor</label>
                        <input type="text" class="form-control" id="proveedor" name="proveedor" value="<?= $equipo->proveedor; ?>">
                        <span class="fa fa-users form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_mantenimiento">Intervalo de Mantenimiento</label>
                        <input type="text" class="form-control" id="intervalo_mantenimiento" name="intervalo_mantenimiento" value="<?= $equipo->intervalo_mantenimiento; ?>">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_mantenimiento">Fecha Primer Mantenimiento</label>
                        <input type="date" class="form-control" id="fecha_mantenimiento" name="fecha_mantenimiento" value="<?= $equipo->fecha_mantenimiento; ?>">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="avisar">Avisar</label>
                        <input type="text" class="form-control" id="avisar" name="avisar" value="<?= $equipo->avisar; ?>">
                        <span class="fa fa-exclamation-triangle form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="pauta_mantencion">Pauta de mantención</label>
                        <input type="text" class="form-control" id="pauta_mantencion" name="pauta_mantencion" value="<?= $equipo->pauta_mantencion; ?>">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_calibracion">Intervalo de calibración</label>
                        <input type="text" class="form-control" id="intervalo_calibracion" name="intervalo_calibracion" value="<?= $equipo->intervalo_calibracion; ?>">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="intervalo_verificacion">Intervalo de verificación</label>
                        <input type="text" class="form-control" id="intervalo_verificacion" name="intervalo_verificacion" value="<?= $equipo->intervalo_verificacion; ?>">
                        <span class="fa fa-wrench form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="criterio_aceptacion">Criterio de aceptación</label>
                        <input type="text" class="form-control" id="criterio_aceptacion" name="criterio_aceptacion" value="<?= $equipo->criterio_aceptacion; ?>">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="observaciones">Observaciones</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="6" cols="40"><?= $equipo->observaciones; ?></textarea>
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="actividad">Actividad</label>
                        <input type="text" class="form-control" id="actividad" name="actividad" value="<?= $equipo->actividad; ?>">
                        <span class="fa fa-clock-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="f_realizacion">Fecha realización</label>
                        <input type="date" class="form-control" id="f_realizacion" name="f_realizacion" value="<?= $equipo->f_realizacion; ?>">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="f_proxima">Fecha próxima</label>
                        <input type="date" class="form-control" id="f_proxima" name="f_proxima" value="<?= $equipo->f_proxima; ?>">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="realizado_por">Realizado por</label>
                        <input type="text" class="form-control" id="realizado_por" name="realizado_por" value="<?= $equipo->realizado_por; ?>">
                        <span class="fa fa-thumbs-up form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="ncertificado">N° de certificado</label>
                        <input type="text" class="form-control" id="ncertificado" name="ncertificado" value="<?= $equipo->ncertificado; ?>">
                        <span class="fa fa-certificate form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="observacion">Observación</label>
                        <textarea class="form-control" id="observacion" name="observacion" rows="6" cols="40" value="<?= $equipo->observacion; ?>"></textarea>
                        <span class="fa fa-star-o form-control-feedback"></span>
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
                <h3 class="box-title">Cambiar Imagen Equipo</h3>
            </div><!-- /.box-header -->

            <div id="notificacion_imagen"></div>

            <form  id="subir_equipo" name="subir_equipo" method="post"  action="imagen_equipo" class="imagenes" enctype="multipart/form-data" >
                <input type="hidden" name="equipo_foto" value="<?= $equipo->id; ?>">
                <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">
                <div class="box-body">

                    <div class="form-group col-xs-12" >
                        <?php if($equipo->foto==""){ $equipo->foto="imagenes/f4/termometro.jpg"; }?>
                        <img src="<?=  $equipo->foto;  ?>"  alt="User Image"  style="width:160px;height:160px;" id="foto" >
                        <!-- User image -->
                    </div>

                    <div class="form-group col-xs-12"  >
                        <label>Agregar Imagen Equipo</label>
                        <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
                    </div>

                    <div class="box-footer">
                        <button type="submit" class=".btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    <!-- end col mod 6 -->
</div>
