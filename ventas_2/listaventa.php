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
            </div>
            <div class="card-body">

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Razon Social</th>
                            <th>Nombre Empleado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $consulta = "select v.id_venta,p.nombreproducto,p.descripcion,dv.cantidad,dv.costo,v.fecha,cl.razonsocial,e.nombre,e.paterno 
                        from venta v
                        inner join empleado e on v.id_empleado=e.id_empleado
                        inner join cliente cl on v.id_cliente=cl.id_cliente
                        inner join detalle_venta dv on v.id_venta=dv.id_Venta
                        inner join producto p on dv.id_producto=p.id_producto;";
                        $resultado = mysqli_query($conexion, $consulta);
                        while ($dato = mysqli_fetch_array($resultado)) {
                            
                            ?>
                                <tr>
                                    <td><?= $dato['nombreproducto'] ?></td>
                                    <td><?= $dato['descripcion'] ?></td>
                                    <td><?= $dato['cantidad'] ?></td>
                                    <td><?= $dato['costo'] ?></td>
                                    <td><?= $dato['fecha'] ?></td>
                                    <td><?= $dato['razonsocial'] ?></td>
                                    <td><?= $dato['nombre'].' '.$dato['paterno'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#inlineForm<?php echo $ci; ?>">
                                                <i class="fas fa-user-edit"></i>
                                            </a>
                                            <a class="btn btn-danger" data-toggle="modal" data-target="#small<?php echo $ci; ?>">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php'); ?>