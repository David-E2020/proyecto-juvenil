<button type="button" class="btn btn-primary block" data-toggle="modal" data-target="#exampleModalCenter">
    Registrar
</button>
<!-- Vertically Centered modal Modal -->
<div class="modal fade text-center" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Esta seguro de registrar <?php echo $nombre;?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cerrar</span>
                </button>
                <button type="submit" class="btn btn-primary ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Aceptar</span>
                </button>
            </div>
        </div>
    </div>
</div>