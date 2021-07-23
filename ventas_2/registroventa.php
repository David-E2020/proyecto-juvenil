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
                <h3>Lista de ventas</h3>
                <br>
                <div class="col-12 d-flex">
                    <a href="carrito.php" class="btn btn-primary">Ver carrito</a>
                </div>
            </div>
            <div class="card-body">
                <form class="form" method="post" action="php/adicioncarrito.php">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Precio Unitario</th>
                            <th>Stock</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $consulta = "SELECT p.id_producto,pv.empresa,p.nombreproducto,p.descripcion,p.stock,p.costocompra,p.costoventa,p.fecha
                        FROM producto p
                        INNER JOIN proveedor pv ON pv.id_proveedor=p.id_proveedor;";
                        $resultado = mysqli_query($conexion, $consulta);
                        while ($dato = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr>
                                    <td><b><?php echo strtoupper($dato['id_producto']);?></b></td>
                                    <td><?php echo strtoupper($dato['nombreproducto']);?></td>
                                    <td><strong class="eli"><?php echo $dato['costoventa'].' ';?> Bs</strong></td>
                                    <td><strong class="btn btn-default"><b>Stock: <?php echo $dato['stock'];?></b></strong></td>
                                    
                                    <?php 
                                    //verificamos si ya fue añadido
                                    $estado=false;
                                    if(isset($_SESSION['carrito_ventas1'])){
                                        foreach($_SESSION['carrito_ventas1'] as $c){
                                            if($c['id_producto']==$dato['id_producto']){
                                                $estado=true;
                                                break;
                                            }
                                        }
                                    }
                                    ?>
                                    <?php 
                                    if($estado){ ?>
                                        <td><a href="#" class="btn btn-success">Agregado</a></td>
                                        
                                        <?php
                                    }else{
                                        if($dato['stock']!=0){?>
                                                <td>
                                                    <input type="hidden" name="id_producto" value="<?php echo $dato['id_producto'];?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="cantidad" style="width: 80px;" value="1" min="1" max="<?php echo $dato['stock'];?>">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                                </td>
                                        <?php
                                        }else{?>
                                            <div>
                                                <td></td>
                                                <td><button type="button" class="btn btn-danger">Agotado</button></td>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>                                    
                                </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
                </form>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php'); ?>