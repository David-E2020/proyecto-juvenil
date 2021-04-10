<?php include('../cuerpo/encabezado.php'); ?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Registrar</h3>
                <p class="text-subtitle text-muted">Registro de Clientes</p>
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
                        <h4 class="card-title">Datos de cliente</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="../adicionar/adicionar_form_cliente.php">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>razon social</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="razonsocial" class="form-control" name="razonsocial" placeholder="razon social" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>nit cliente</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nit_cli" class="form-control" name="nit_cli" placeholder="nit del cliente" required>
                                    </div>



                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-light-secondary mr-1 mb-1">limpiar</button>
                                        <?php $nombreRegistro='el nuevo cliente?';include('modal_registrar.php');?>
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