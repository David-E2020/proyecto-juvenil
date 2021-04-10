<?php 
include('encabezado.php');
?>

<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3></h3>
                        </div>
                    </div>

                </div>


                <!-- // Basic multiple Column Form section end -->

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-2 col-12">

                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datos del estudiante</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="modificar_r.php">
                                                <input type="hidden" name="id" value="<?=$id?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Nombre</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['nombre']?>" type="text" id="nombre" class="form-control"
                                                            name="nombre" placeholder="Nombre completo">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Apellido paterno</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['paterno']?>" type="text" id="paterno" class="form-control"
                                                            name="paterno" placeholder="Apellido paterno">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Apellido materno</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['materno']?>" type="text" id="materno" class="form-control"
                                                            name="materno" placeholder="Apellido materno">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Direccion</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['direccion']?>" type="text" id="direccion" class="form-control"
                                                            name="direccion" placeholder="Direccion de domicilio">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>celular</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['celular']?>" type="text" id="celular" class="form-control"
                                                            name="celular" placeholder="Numero de celular">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['email']?>" type="email" id="email" class="form-control"
                                                            name="email" placeholder="Correo electronico">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Fecha de inscripcion</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['fecha_inscripcion']?>" type="date" id="inscripcion" class="form-control"
                                                            name="inscripcion" placeholder="Fecha de inscripcion">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Horario de entrenamiento</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="<?=$dato['id_horario']?>" type="number" id="horario_clases" class="form-control"
                                                            name="horario_clases" placeholder="Horario de clases">
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Modificar</button>
                                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
            </section>

            </div>

<?php 
include('pie.php');
?>