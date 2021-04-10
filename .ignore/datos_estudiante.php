<?php include('encabezado.php');
include('bd/coneccion.php');
$id=$_GET['id'];
$consulta = "SELECT * FROM estudiantes WHERE id_estudiante=$id";
$resultado = mysqli_query($conexion,$consulta);
$dato = mysqli_fetch_array($resultado);
//encontramos el horario con el id_horario de la tabla del estudiante
$id_horario=$dato['id_horario'];
$consultaHorario = "SELECT * FROM horario WHERE id_horario=$id_horario";
$resultadoHorario = mysqli_query($conexion,$consultaHorario);
$horario = mysqli_fetch_array($resultadoHorario);

//encontramos a su instructor
$id_instructor=$horario['id_instructor'];
$consultaInstructor = "SELECT * FROM instructor WHERE id_instructor=$id_instructor";
$resultadoInstructor = mysqli_query($conexion,$consultaInstructor);
$instructor = mysqli_fetch_array($resultadoInstructor);

//encontramos el dia de entrenamiento
$id_dia=$horario['id_dia'];
$consultaDia = "SELECT * FROM dia WHERE id_dia=$id_dia";
$resultadoDia = mysqli_query($conexion,$consultaDia);
$dia = mysqli_fetch_array($resultadoDia);

//encontramos la hora de entrenamiento
$id_horaEnt=$dia['id_hora'];
$consultaHora = "SELECT * FROM hora WHERE id_hora=$id_horaEnt";
$resultadoHora = mysqli_query($conexion,$consultaHora);
$hora = mysqli_fetch_array($resultadoHora);


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
                                    <h4 class="card-title">Horario de entrenamiento</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="modificar_r.php">
                                                <input type="hidden" name="id" value="<?=$id?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Nombre del instructor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input disabled="disabled" value="<?=$instructor['nombre'].' '.$instructor['paterno'].' '.$instructor['materno']?>" type="text" id="nombre-inst" class="form-control"
                                                            name="nombre-inst" placeholder="Nombre completo">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Num de celular del instructor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input disabled="disabled" value="<?=$instructor['celular']?>" type="text" id="cel-inst" class="form-control"
                                                            name="cel-inst" placeholder="Nombre completo">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Correo electronico del instructor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input disabled="disabled" value="<?=$instructor['email']?>" type="email" id="email-inst" class="form-control"
                                                            name="email-inst" placeholder="Nombre completo">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Grado del instructor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input disabled="disabled" value="<?=$instructor['grado']?>" type="text" id="grado-inst" class="form-control"
                                                            name="grado-inst" placeholder="Grado del instructor">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Dias de entrenamiento</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input disabled="disabled" value="<?=$dia['dia']?>" type="text" id="dia" class="form-control"
                                                            name="dia" placeholder="Dias de entrenamiento">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Hora de entrenamiento</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input disabled="disabled" value="<?=$hora['hora']?>" type="text" id="hora" class="form-control"
                                                            name="hora" placeholder="Hora de entrenamiento">
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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

<?php include('pie.php');?>