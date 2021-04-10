<?php include('encabezado.php');
include('bd/coneccion.php');
$id=$_GET['id'];
$consulta = "SELECT * FROM estudiantes WHERE id_estudiante=$id";
$resultado = mysqli_query($conexion,$consulta);
$dato = mysqli_fetch_array($resultado);


?>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Modificar</h3>
                            <p class="text-subtitle text-muted">Modificar registro</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Tablero</a></li>
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
                                    <h4 class="card-title">Modificar registro</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="modificar_r.php">
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Nombre completo</label>
                                                        <input value="<?=$dato['nombre']?>" type="text" id="nombre" class="form-control"
                                                            placeholder="Nombre completo" name="nombre" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Apellido Paterno</label>
                                                        <input value="<?=$dato['ap_paterno']?>" type="text" id="paterno" class="form-control"
                                                            placeholder="Apellido Paterno" name="paterno" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Apellido Materno</label>
                                                        <input value="<?=$dato['ap_materno']?>" type="text" id="materno" class="form-control"
                                                            placeholder="Apellido Materno" name="materno" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Direccion</label>
                                                        <input value="<?=$dato['direccion']?>" type="text" id="direccion" class="form-control"
                                                            name="direccion" placeholder="direccion de vivienda" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Celular</label>
                                                        <input value="<?=$dato['celular']?>" type="number" id="celular" class="form-control"
                                                            name="celular" placeholder="Celular" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Email</label>
                                                        <input value="<?=$dato['email']?>" type="email" id="email" class="form-control"
                                                            name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class='form-check'>
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox5"
                                                                class='form-check-input' checked>
                                                            <label for="checkbox5">Recordar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Modificar</button>
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

<?php include('pie.php');?>