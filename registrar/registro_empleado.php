<?php include('../cuerpo/encabezado.php');?>
<?php include('../bd/coneccion.php');?>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Registrar</h3>
                            <p class="text-subtitle text-muted">Registro de empleados</p>
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
                                    <h4 class="card-title">Datos del empleado</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="../adicionar/adicionar_form_empleado.php">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Cargo</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <fieldset class="form-group">
                                                            <select class="form-select" id="id_Cargo" name="id_cargo" required>
                                                                <?php 
                                                                $consulta = "SELECT * FROM cargo";
                                                                $resultado = mysqli_query($conexion,$consulta);
                                                                while($dato = mysqli_fetch_array($resultado)){
                                                                    $id=$dato['id_cargo'];
                                                                    $cargo=$dato['cargo'];
                                                                    ?>
                                                                        <option value="<?=$id?>"><?=$cargo?></option>
                                                                    <?php
                                                                }
                                                                ?>

                                                                
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>C.I</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="ci" class="form-control"
                                                            name="ci" placeholder="carnet de identidad" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Nombre</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nombre" class="form-control"
                                                            name="nombre" placeholder="Digite el/los nombres" required>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <label>Paterno</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="paterno" class="form-control"
                                                            name="paterno" placeholder="apellido paterno" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Materno</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="materno" class="form-control"
                                                            name="materno" placeholder="apellido materno">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Direccion</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="direccion" class="form-control"
                                                            name="direccion" placeholder="direccion de vivienda" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Telefono</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="telefono" class="form-control"
                                                            name="telefono" placeholder="numero de telefono" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Fecha de nacimiento</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="date" id="fechanacimiento" class="form-control"
                                                            name="fechanacimiento" placeholder="fecha de nacimiento" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Genero</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        
                                                        <input class="form-check-input" type="radio" name="genero" value="masculino" required>
                                                        <label class="form-check-label">
                                                            Masculino
                                                        </label>

                                                        <input class="form-check-input" type="radio" name="genero" value="femenino" required>
                                                        <label class="form-check-label">
                                                            Femenino
                                                        </label>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>intereses</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <textarea class="form-control" id="intereses" name="intereses" placeholder="Mencione alguno de sus intereses" rows="3"></textarea>
                                                    </div>

                                                    

                                                <div class="col-12 d-flex justify-content-end">
                                                    <?php $nombreRegistro = 'el nuevo empleado?';include('modal_registrar.php'); ?>
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

<?php include('../cuerpo/pie.php');?>