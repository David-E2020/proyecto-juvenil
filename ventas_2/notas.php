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
                <h3>Lista de ventas</h3>
            </div>
            <div class="card-body">

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
                                    if(isset($_SESSION['carrito_venta1'])){
                                        foreach($_SESSION['carrito_venta1'] as $c){
                                            if($c['id_producto']==$dato['id_producto']){
                                                $estado=true;
                                                break;
                                            }
                                        }
                                    }
                                    ?>
                                    <?php
                                    //muestra agregado
                                    if($estado):    ?>
                                        <a href="carrito.php" class="btn btn-success">Agregado</a>
                                    <?php
                                    else:?>
                                    <?php
                                    if($dato['stock']!=0){?>
                                    <form method="post" action="php/adicioncarrito.php"></form>
                                    <input type="hidden" name="id_producto" value="<?php echo $dato['id_producto'];?>">


                                    <!--Campo cantidad -->
                                    
                                    <input type="number" name="cantidad" value="1" style="width: 80px;" min="1" max="<?php echo $dato['stock'];?>" class="form-control"></td>
                                    <td>
                                    <button type="submit" class="btn btn-primary">Agregar</button></td>
                                    </form>
                                    <?php }else{ ?>
                                    <div>
                                        <td><button type="button" class="btn btn-danger">Agotado</button></td>
                                    </div>
                                    <?php }?>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#inlineForm<?php echo $ci; ?>">
                                                agregar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif;
                        }
                        ?>

                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end">
                    <a href="registrar_usuario.php" class="btn btn-primary">new user</a>
                </div>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php'); ?>