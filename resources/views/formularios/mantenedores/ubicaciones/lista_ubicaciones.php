<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de ubicaciones</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($ubicaciones) >0){
            ?>

            <table id="tabla_ubicaciones" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Ubicacion</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($ubicaciones as $ubicacion){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $ubicacion->id; ?></td>
                        <td><?= $ubicacion->lugar_almacenamiento; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_ubicacion(<?= $ubicacion->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_ubicacion(<?= $ubicacion->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $ubicaciones->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ninguna ubicación dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(5);" style="color: #ffffff"> Agregar Ubicación</a></button>
</div>



