<?php include('../cuerpo/encabezado.php'); ?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Registrar</h3>
                <p class="text-subtitle text-muted">Registro de cargo</p>
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
                        <h4 class="card-title">Datos de cargo</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="../adicionar/adicionar_form_cargo.php">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label>cargo</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="cargo" class="form-control" name="cargo" placeholder="nombre del cargo" required>
                                    </div>


                                    <div class="col-12 d-flex justify-content-end">

                                        <?php $nombreRegistro = 'el nuevo cargo?';include('modal_registrar.php'); ?>
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