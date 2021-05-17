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
                <h3>Lista de usuarios</h3>
            </div>
            <div class="card-body">

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Empleado</th>
                            <th>usuario</th>
                            <th>nivel</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $consulta = "SELECT e.nombre,e.paterno,e.materno,u.* FROM usuarios u INNER JOIN empleado e ON u.ci=e.ci AND u.estado=1
                        GROUP BY u.ci;";
                        $resultado = mysqli_query($conexion, $consulta);
                        while ($dato = mysqli_fetch_array($resultado)) {

                            $ci = $dato['ci'];
                            $nombre=$dato['nombre'].' '.$dato['paterno'].' '.$dato['materno'];
                            $usuario = $dato['usuario'];
                            $nivel=$dato['nivel'];
                            if($dato['nivel']==1){
                                $nivel='administrador';
                            }else if($dato['nivel']==2){
                                $nivel='secretario';
                            }
                            
                        ?>
                            <tr>
                                <td><?= $nombre ?></td>
                                <td><?= $usuario ?></td>
                                <td><?= $nivel?></td>
                                <td>
                                    <div class="btn-group">
                                        <?php include('modal_eliminar_usuario.php');?>
                                        <?php include('modal_editar_usuario.php');?>
                                    </div>
                                </td>
                            </tr>
                        <?php
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