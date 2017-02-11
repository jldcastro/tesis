<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Actualizar datos actividad equipo</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_actividad" method="post"  action="actualizar_actividad" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_actividad" value="<?= $actividad->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="actividad">Actividad</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $actividad->nombre; ?>">
                        <span class="fa fa-bar-chart form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
