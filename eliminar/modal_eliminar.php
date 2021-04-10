<!--Modal sm size -->
<div class="mr-1 mb-1 d-inline-block">
    <!-- Button trigger for small size modal modal -->
    <a class="btn btn-danger" data-toggle="modal" data-target="#small<?php echo $id; ?>">
        <i class="far fa-trash-alt"></i>
    </a>

    <!--small size modal -->
    <div class="modal fade text-center" id="small<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Esta seguro de eliminar a <?php echo $nombre; ?> del registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary btn-sm" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-sm-block d-none">Close</span>
                    </button>

                    <a type="submit" href="<?php echo $accion?>?id=<?= $id ?>" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Aceptar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>