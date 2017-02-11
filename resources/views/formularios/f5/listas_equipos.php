<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Listado de equipos</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($equipos) >0){
            ?>

            <table id="tabla_equipos" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:40px">N°</th>
                    <th>Equipo</th>
                    <th>Serie</th>
                    <th>Certificado</th>
                    <th>Ubicación</th>
                    <th style="width:30px"></th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($equipos as $equipo){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $equipo->id; ?></td>
                        <td><?= $equipo->nombre->equipo ." ".$equipo->marca->marca_modelo; ?></td>
                        <td><?= $equipo->nserie ?></td>
                        <td><?= $equipo->ncertificado ?></td>
                        <td><?= $equipo->ubicacion->lugar_almacenamiento ?></td>
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

            <br/><div class='alert alert-warning'><label>No existe ninguna lista de equipos dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <a href="descargar_f5"><button class=".btn  bg-navy btn-xs"><i class="fa fa-fw fa-file-word-o"></i> Descargar</button></a>
</div>


