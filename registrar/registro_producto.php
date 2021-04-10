<?php include('../cuerpo/encabezado.php');?>
<?php include('../bd/coneccion.php');?>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Registrar</h3>
                            <p class="text-subtitle text-muted">Registro de producto</p>
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
                                    <h4 class="card-title">Datos del producto</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="../adicionar_form_producto.php">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <label>proveedor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <fieldset class="form-group">
                                                            <select class="form-select" id="id_proveedor" name="id_proveedor" required>
                                                                <?php 
                                                                $consulta = "SELECT * FROM proveedor";
                                                                $resultado = mysqli_query($conexion,$consulta);
                                                                while($dato = mysqli_fetch_array($resultado)){
                                                                    $id=$dato['id_proveedor'];
                                                                    $empresa=$dato['empresa'];
                                                                    ?>
                                                                        <option value="<?=$id?>"><?=$empresa?></option>
                                                                    <?php
                                                                }
                                                                ?>

                                                                
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nombre producto</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nombreproducto" class="form-control"
                                                            name="nombreproducto" placeholder="Digite el nombre del producto" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Descripcion</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="decripcion" class="form-control"
                                                            name="decripcion" placeholder="decripcion del producto" required>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <label>costo compra</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="costocompra" class="form-control"
                                                            name="costocompra" placeholder="costo compra" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>costo venta</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="costoventa" class="form-control"
                                                            name="costoventa" placeholder="costo de la venta">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>stock</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="stock" class="form-control"
                                                            name="stock" placeholder="stock" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>fecha</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="date" id="fecha" class="form-control"
                                                            name="fecha" placeholder="fecha" required>
                                                    </div>

                                                    
                                                    

                                                <div class="col-12 d-flex justify-content-end">
                                                <?php $nombreRegistro = 'el nuevo producto?';include('modal_registrar.php'); ?>
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