<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de actividades</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($actividades) >0){
            ?>

            <table id="tabla_actividades" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Actividad</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($actividades as $actividad){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $actividad->id; ?></td>
                        <td><?= $actividad->nombre; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_actividad(<?= $actividad->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_actividad(<?= $actividad->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $actividades->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ninguna actividad dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(6);" style="color: #ffffff"> Agregar Actividad</a></button>
</div>



