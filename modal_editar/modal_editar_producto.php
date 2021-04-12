<!--Modal sm size -->
<div class="mr-1 mb-1 d-inline-block">


    <a class="btn btn-primary" data-toggle="modal" data-target="#inlineForm<?php echo $id; ?>">
        <i class="fas fa-user-edit"></i>
    </a>

    <!--login form Modal -->
    <div class="modal fade text-left modal-borderless" id="inlineForm<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Modificar <?php echo $nombre ?> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form class="form" method="post" action="../editar/editar_producto.php?id=<?= $id ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>proveedor</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <fieldset class="form-group">
                                    <select class="form-select" name="id_proveedor" required>
                                        <?php
                                        $resultadoPro = mysqli_query($conexion, "SELECT * FROM proveedor");
                                        while ($dato = mysqli_fetch_array($resultadoPro)) {
                                        ?>
                                            <option <?php if($id_proveedor==$dato['id_proveedor']){echo "selected";}?> value="<?= $dato['id_proveedor'] ?>"><?= $dato['empresa'] ?></option>
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
                                <input type="text" class="form-control" name="nombreproducto" value="<?= $nombre ?>" placeholder="Digite el nombre del producto" required>
                            </div>

                            <div class="col-md-4">
                                <label>Descripcion</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="descripcion" value="<?= $descripcion ?>" placeholder="decripcion del producto" required>
                            </div>

                            <div class="col-md-4">
                                <label>costo compra</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="costocompra" value="<?= $costocompra ?>" placeholder="costo compra" required>
                            </div>
                            <div class="col-md-4">
                                <label>costo venta</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="costoventa" value="<?= $costoventa ?>" placeholder="costo de la venta">
                            </div>

                            <div class="col-md-4">
                                <label>stock</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="stock" value="<?= $stock ?>" placeholder="stock" required>
                            </div>

                            <div class="col-md-4">
                                <label>fecha</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="date" class="form-control" name="fecha" value="<?= $fecha ?>" placeholder="fecha" required>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cerrar</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Modificar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>