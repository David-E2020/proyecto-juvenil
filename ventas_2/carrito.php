<?php
include('../bd/coneccion.php');
//David Elias Mamani Laura

include("../seguridad.php");
if($_SESSION['nivel']==1){
    include('../cuerpo/encabezado.php');
}else{
    if($_SESSION['nivel']==2){
        include('../cuerpo/encabezado2.php');
    }
}

?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Productos seleccionados</h3>
                <br>
                <div class="col-12 d-flex">
                    <a href="registroventa.php" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
            <div class="card-body">

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Total</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $t=0;
                        $producto=mysqli_query($conexion,"SELECT * FROM producto");
                        if(isset($_SESSION["carrito_ventas1"]) && !empty($_SESSION["carrito_ventas1"])):
                            $cont=0;
                            foreach($_SESSION["carrito_ventas1"] as $c){
                                $producto = mysqli_query($conexion,"SELECT * FROM producto WHERE id_producto=$c[id_producto]");
                                while ($dato = mysqli_fetch_array($producto)) {
                                    $cont++;
                                    ?>
                                        <tr>
                                            <td><?php echo $cont; ?></td>
                                            <td><?= $dato['nombreproducto'] ?></td>
                                            <td><?= $dato['descripcion'] ?></td>
                                            <td><?= $dato['cantidad'] ?></td>
                                            <td><?= $dato['costoventa'] ?></td>
                                            <td><?= $dato['cantidad']*$dato['costoventa'] ?></td>?>
                                            <?php 
                                            $found=false;
                                            foreach($_SESSION["carrito_ventas1"] as $c){
                                                if($c["id_producto"]==$dato["id_producto"]){
                                                    $found=true;
                                                    break;
                                                }
                                            }
                                            ?>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="php/delfromcart.php?id=<?php echo $c["id_producto"];?>" class="btn btn-danger">
                                                        eliminar
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        else:?>
                        <p class="alert alert-warning">No hay productos seleciconados</p>
                        <?php
                        endif;
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php'); ?>