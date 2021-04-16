<!--Modal sm size -->
<div class="mr-1 mb-1 d-inline-block">


    <a class="btn btn-primary" data-toggle="modal" data-target="#inlineForm<?php echo $id; ?>">
        <i class="fas fa-user-edit"></i>
    </a>

    <!--login form Modal
    //David Elias Mamani Laura -->
    <div class="modal fade text-left modal-borderless" id="inlineForm<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Modificar <?php echo $nombre; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form class="form" method="post" action="../editar/editar_cargo.php?id=<?= $id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Cargo: </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" placeholder="nombre del cargo" required>
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