<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de marcas/modelos</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($marcas) >0){
            ?>

            <table id="tabla_marcas" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Marca/Modelo</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($marcas as $marca){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $marca->id; ?></td>
                        <td><?= $marca->marca_modelo; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_marca(<?= $marca->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_marca(<?= $marca->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $marcas->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ninguna marca o modelo dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(4);" style="color: #ffffff"> Agregar Marca</a></button>
</div>



