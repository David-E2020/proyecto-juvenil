<?php include('encabezado.php');?>
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Registrar</h3>
                            <p class="text-subtitle text-muted">Registro de instructor</p>
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
                                    <h4 class="card-title">Datos del instructor</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="adicionar_instructor_form_r.php">
                                            <div class="row">
                                            <div class="col-md-4">
                                                        <label>Nombre</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nombre" class="form-control"
                                                            name="nombre" placeholder="Nombre completo">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Apellido paterno</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="paterno" class="form-control"
                                                            name="paterno" placeholder="Apellido paterno">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Apellido materno</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="materno" class="form-control"
                                                            name="materno" placeholder="Apellido materno">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Direccion</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="direccion" class="form-control"
                                                            name="direccion" placeholder="Direccion de domicilio">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>celular</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="celular" class="form-control"
                                                            name="celular" placeholder="Numero de celular">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" id="email" class="form-control"
                                                            name="email" placeholder="Correo electronico">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Grado del instructor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="grado" class="form-control"
                                                            name="grado" placeholder="Grado del instructor">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Fecha de inscripcion</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="date" id="inscripcion" class="form-control"
                                                            name="inscripcion" placeholder="Fecha de inscripcion">
                                                    </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Registrar</button>
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