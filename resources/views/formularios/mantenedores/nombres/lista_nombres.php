<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de nombres equipos</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($nombres) >0){
            ?>

            <table id="tabla_nombres" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Nombre</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($nombres as $nombre){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $nombre->id; ?></td>
                        <td><?= $nombre->equipo; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_nombre(<?= $nombre->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_nombre(<?= $nombre->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $nombres->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ningun nombre de equipo dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(3);" style="color: #ffffff"> Agregar Equipo</a></button>
</div>



