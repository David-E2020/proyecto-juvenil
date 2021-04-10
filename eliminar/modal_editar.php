<!--Modal sm size -->
<div class="mr-1 mb-1 d-inline-block">
    <!-- Button trigger for small size modal modal -->
    <a class="btn btn-primary" data-toggle="modal" data-target="#small2<?php echo $id; ?>">
        <i class="fas fa-user-edit"></i>
    </a>

    <!--small size modal -->
    <div class="modal fade text-center" id="small2<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Esta seguro de editar a <?php echo $dato['nombre']; ?>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary btn-sm" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-sm-block d-none">Close</span>
                    </button>

                    <a type="submit" href="#?id=<?= $id ?>" class="btn btn-danger ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Aceptar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>