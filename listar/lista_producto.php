
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
                <h3>Lista de productos</h3>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id</th><th>proveedor</th><th>Nombre del producto</th><th>descripcion</th><th>costp compra</th>
                            <th>costo venta</th><th>stock</th><th>fecha</th><th>estado</th><th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $consulta = "SELECT * FROM producto WHERE estado=1";
                        $resultado = mysqli_query($conexion,$consulta);
                        $accion = "../eliminar/eliminar_producto.php";
                        while($dato = mysqli_fetch_array($resultado)){
                            $id=$dato['id_producto'];
                            $id_proveedor=$dato['id_proveedor'];
                            $nombre=$dato['nombreproducto'];
                            $descripciom=$dato['descripcion'];
                            $costocompra=$dato['costocompra'];
                            $costoventa=$dato['costoventa'];
                            $stock=$dato['stock'];
                            $fecha=$dato['fecha'];
                            //estado 1 activo
                            //estado 0 inactivo
                            if($dato['estado']==1){
                                $estado='Activo';
                            }else{
                                $estado='Inactivo';
                            }
                            $result=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM proveedor WHERE id_proveedor=$id_proveedor"));
                            ?>
                            <tr>
                                <td><?=$id?></td><td><?=$result['empresa']?></td><td><?=$nombre?></td><td><?=$descripciom?></td>
                                <td><?=$costocompra?></td><td><?=$costoventa?></td><td><?=$stock?></td><td><?=$fecha?></td><td><?=$estado?></td>
                                <td>
                                <div class="btn-group">
                                    <?php include('../eliminar/modal_eliminar.php');$accion; ?>
                                    <?php include('../eliminar/modal_editar.php'); ?>
                                </div>
                                </td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end">
                    <a href="../registrar/registro_producto.php" class="btn btn-primary">Nuevo producto</a>
                </div>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php');?>
