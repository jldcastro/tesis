<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de equipos</h3>
        <br><br>
        <h6 class="box-title">Buscar Equipos</h6>
        <div class="input-group input-group-sm col-md-3">
            <input type="text" class="form-control" id="dato_buscado">
            <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="button" onclick="buscarequipo();" ><i class="fa fa-fw a fa-search"></i></button>
            </span>
        </div>
    </div>

    <div class="box-body">

        <?php
        if( count($equipos) >0){
            ?>

            <table id="tabla_equipos" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Equipo</th>
                    <th>Marca/Modelo</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($equipos as $equipo){

                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $equipo->id; ?></td>
                        <td><?= $equipo->nombre->equipo; ?></td>
                        <td><?= $equipo->marca->marca_modelo; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_equipo(<?= $equipo->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-warning btn-xs" onclick="mostrar_equipo(<?= $equipo->id; ?>);" ><i class="fa fa-fw fa-eye"></i> Detalles</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_equipo(<?= $equipo->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                            <a href="descargar_f4/<?= $equipo->id  ?>"><button class=".btn  bg-navy btn-xs"><i class="fa fa-fw fa-file-word-o"></i> Descargar</button></a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $equipos->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ningun equipo dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(2);" style="color: #ffffff"> Agregar Equipo</a></button>
</div>




