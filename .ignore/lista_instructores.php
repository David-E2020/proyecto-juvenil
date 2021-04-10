
<?php
include('bd/coneccion.php');
include('encabezado.php');
?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de instructores</h3>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id</th><th>Nombre</th><th>Direccion</th><th>Celular</th><th>Email</th><th>Fecha Inscripcion</th><th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        $consulta = "SELECT * FROM instructor";
                        $resultado = mysqli_query($conexion,$consulta);
                        while($dato = mysqli_fetch_array($resultado)){
                            $id=$dato['id_instructor'];
                            $nombre=$dato['nombre'];
                            $paterno=$dato['paterno'];
                            $materno=$dato['materno'];
                            $direccion=$dato['direccion'];
                            $celular=$dato['celular'];
                            $email=$dato['email'];
                            $inscripcion=$dato['fecha_inscripcion'];
                            ?>
                            <tr>
                                <td><?=$id?></td><td><?=$nombre?> <?=$paterno?> <?=$materno?></td><td><?=$direccion?></td><td><?=$celular?></td><td><?=$email?></td><td><?=$inscripcion?></td>
                                <td>
                                <div class="btn-group">
                                    <a href="eliminar_instructor.php?id=<?=$id?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    <a href="datos_insructor.php?id=<?=$id?>" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
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

<?php include('pie.php');?>
