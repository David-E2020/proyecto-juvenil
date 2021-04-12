<?php
include('../bd/coneccion.php');
include('../cuerpo/encabezado.php');

?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de clientes</h3>
            </div>
            <div class="card-body">

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id cliente</th>
                            <th>estado</th>
                            <th>razon socail</th>
                            <th>nit</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $consulta = "SELECT * FROM cliente WHERE estado=1";
                        $resultado = mysqli_query($conexion, $consulta);
                        $accion="../eliminar/eliminar_cliente.php";
                        while ($dato = mysqli_fetch_array($resultado)) {
                            $id = $dato['id_cliente'];
                            $estado = $dato['estado'];
                            $nombre = $dato['razonsocial'];
                            $nit = $dato['nit_cli'];
                            //estado 1 activo
                            //estado 0 inactivo
                            if ($estado == 1) {
                                $est = 'Activo';
                            } else {
                                $est = 'Inactivo';
                            }
                        ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $est ?></td>
                                <td><?= $nombre ?></td>
                                <td><?= $nit ?></td>
                                <td>
                                    <div class="btn-group">
                                        <?php include('../eliminar/modal_eliminar.php');$accion;?>
                                        <?php include('../modal_editar/modal_editar_cliente.php');?>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end">
                    <a href="../registrar/registro_cliente.php" class="btn btn-primary">Nuevo cliente</a>
                </div>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php'); ?>