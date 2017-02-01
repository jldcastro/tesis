<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de usuarios</h3>
        <br><br>
        <h6 class="box-title">Buscar Usuarios</h6>
        <div class="input-group input-group-sm col-md-3">
            <input type="text" class="form-control" id="dato_buscado">
            <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="button" onclick="buscarusuario();" ><i class="fa fa-fw a fa-search"></i></button>
            </span>
        </div>
    </div>

<div class="box-body">              

    <?php
        if( count($usuarios) >0){
    ?>

    <table id="tabla_usuarios" class="table table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="width:10px">Id</th>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Opciones</th>
            </tr>
        </thead>
       
        <tbody>
            <?php
                foreach($usuarios as $usuario){
            ?>

            <tr role="row" class="odd">
                <td class="sorting_1"><?= $usuario->id; ?></td>
                <td><?= $usuario->rut_usuario; ?></td>
                <td><?= $usuario->name; ?></td>
                <td><?= $usuario->apellido_paterno; ?></td>
                <td><button class=".btn  btn-success btn-xs" onclick="editar_usuario(<?= $usuario->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                    <button class=".btn  btn-warning btn-xs" onclick="mostrar_usuario(<?= $usuario->id; ?>);"><i class="fa fa-fw fa-eye"></i> Detalles</button>
                    <button class=".btn  btn-danger btn-xs" onclick="eliminar_usuario(<?= $usuario->id; ?>);"><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                </td>
            </tr>

            <?php
                }
            ?>

    </table>

    <?php
        echo str_replace('/?', '?', $usuarios->render() )  ;
            }
        else
            {
    ?>

    <br/><div class='alert alert-warning'><label>No existe ningun usuario dentro de la lista</label></div>

    <?php
        }
    ?>

</div>
</div>
    <div class="form-group has-feedback">
        <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(1);" style="color: #ffffff"> Agregar Usuario</a></button>
    </div>



