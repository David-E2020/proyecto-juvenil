
<?php
//David Elias Mamani Laura
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
                <h3>Lista de empleados</h3>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id empleado</th><th>cargo</th><th>ci</th><th>nombre</th><th>paterno</th>
                            <th>materno</th><th>direccion</th><th>telefono</th><th>fecha nacimiento</th>
                            <th>genero</th><th>intereses</th><th>estado</th><th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        $resultado = mysqli_query($conexion,"SELECT * FROM empleado WHERE estado=1");
                        $accion="../eliminar/eliminar_empleado.php";
                        while($dato = mysqli_fetch_array($resultado)){
                            $id=$dato['id_empleado'];
                            $id_cargo=$dato['id_cargo'];
                            $result=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cargo WHERE id_cargo=$id_cargo"));
                            $ci=$dato['ci'];
                            $nom=$dato['nombre'];
                            $paterno=$dato['paterno'];
                            $materno=$dato['materno'];
                            $direccion=$dato['direccion'];
                            $telefono=$dato['telefono'];
                            $fechanacimiento=$dato['fechanacimiento'];
                            $genero=$dato['genero'];
                            $intereses=$dato['intereses'];
                            $nombre=$nom.' '.$paterno.' '.$materno;
                            //estado 1 activo
                            //estado 0 inactivo
                            if($dato['estado']==1){
                                $estado='Activo';
                            }else{
                                $estado='Inactivo';
                            }
                            
                            ?>
                            <tr>
                                <td><?=$id?></td><td><?=$result['cargo']?></td><td><?=$ci?></td><td><?=$nom?></td>
                                <td><?=$paterno?></td><td><?=$materno?></td><td><?=$direccion?></td>
                                <td><?=$telefono?></td><td><?=$fechanacimiento?></td><td><?=$genero?></td>
                                <td><?=$intereses?></td><td><?=$estado?></td>
                                <td>
                                <div class="btn-group">
                                    <?php include('../eliminar/modal_eliminar.php');$accion;?>
                                    <?php include('../modal_editar/modal_editar_empleado.php');?>
                                </div>
                                </td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end">
                    <a href="../registrar/registro_empleado.php" class="btn btn-primary">Nuevo empleado</a>
                </div>
            </div>
        </div>

    </section>
</div>

<?php include('../cuerpo/pie.php');?>
