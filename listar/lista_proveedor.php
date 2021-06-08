<?php
include('../bd/coneccion.php');


include("../seguridad.php");
if($_SESSION['nivel']==1){
    include('../cuerpo/encabezado.php');
}else{
    if($_SESSION['nivel']==2){
        include('../cuerpo/encabezado2.php');
    }
}
?>

?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de proveedores</h3>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id proveedor</th>
                            <th>empresa</th>
                            <th>contacto</th>
                            <th>mail</th>
                            <th>telefono</th>
                            <th>direccion</th>
                            <th>estado</th>
                            <th>logo</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $consulta = "SELECT * FROM proveedor WHERE estado=1";
                        $resultado = mysqli_query($conexion, $consulta);
                        $accion = "../eliminar/eliminar_proveedor.php";
                        while ($dato = mysqli_fetch_array($resultado)) {
                            $id = $dato['id_proveedor'];
                            $nombre = $dato['empresa'];
                            $contacto = $dato['contacto'];
                            $mail = $dato['mail'];
                            $telefono = $dato['telefono'];
                            $direccion = $dato['direccion'];
                            //estado 1 activo
                            //estado 0 inactivo
                            if ($dato['estado'] == 1) {
                                $estado = 'Activo';
                            } else {
                                $estado = 'Inactivo';
                            }
                            $logo = $dato['logo'];
                        ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $nombre ?></td>
                                <td><?= $contacto ?></td>
                                <td><?= $mail ?></td>
                                <td><?= $telefono ?></td>
                                <td><?= $direccion ?></td>
                                <td><?= $estado ?></td>

                                <?php echo '<td><img width="60" src="../imagenes_proveedor/' . $logo . '"></td>'; ?>
                                <td>
                                    <div class="btn-group">
                                        <?php include('../eliminar/modal_eliminar.php');$accion; ?>
                                        <?php include('../modal_editar/modal_editar_proveedor.php');?>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end">
                    <a href="../registrar/registro_proveedor.php" class="btn btn-primary">Nuevo proveedor</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('../cuerpo/pie.php'); ?>