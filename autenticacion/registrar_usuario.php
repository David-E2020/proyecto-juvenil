<?php include('../cuerpo/encabezado.php'); ?>
<?php include('../bd/coneccion.php'); ?>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Registrar</h3>
                <p class="text-subtitle text-muted">Registro de usuarios</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Tablero</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Diseño del formulario</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">

        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datos del usuario</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="grabar_usuario.php">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Empleado</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" id="id_empleado" name="id_empleado" required>
                                                <?php
                                                $consulta = "SELECT * FROM empleado";
                                                $resultado = mysqli_query($conexion, $consulta);
                                                while ($dato = mysqli_fetch_array($resultado)) {
                                                    $id = $dato['ci'];
                                                    $id_emp = $dato['id_empleado'];
                                                    $nombre = $dato['nombre'] . ' ' . $dato['paterno'] . ' ' . $dato['materno'] . ' ';
                                                ?>
                                                    <option value="<?= $id ?> <?= $id_emp ?>"><?= $nombre ?></option>
                                                <?php
                                                }
                                                ?>


                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Usuario</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nombre_usuario" class="form-control" name="nombre_usuario" placeholder="Digite el nombre del usuario" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Contraseña</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="password" id="contraseña1" class="form-control" name="contraseña1" placeholder="ingrese una nueva contraseña" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Repita la contraseña</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="password" id="contraseña2" class="form-control" name="contraseña2" placeholder="repita la contraseña" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>nivel</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" id="nivel" name="nivel">
                                                <option value="1">administrador</option>
                                                <option value="2">secretaria</option>
                                            </select>
                                        </fieldset>
                                    </div>



                                    <div class="col-12 d-flex justify-content-end">
                                        <?php $nombre = 'el nuevo usuario?';
                                        include('modal_registrar_usuario.php'); ?>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- // Basic multiple Column Form section end -->
</div>

<?php include('../cuerpo/pie.php'); ?>