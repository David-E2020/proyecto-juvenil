<!--Modal sm size -->
<div class="mr-1 mb-1 d-inline-block">


    <a class="btn btn-primary" data-toggle="modal" data-target="#inlineForm<?php echo $ci; ?>">
        <i class="fas fa-user-edit"></i>
    </a>

    <!--login form Modal  //David Elias Mamani Laura-->
    <div class="modal fade text-left modal-borderless" id="inlineForm<?php echo $ci; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Modificar empleado: <?php echo $nombre;?> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form class="form" method="post"action="editar_form_usuario.php?id=<?= $ci;?>">
                    <div class="modal-body">
                        <label>Usuario: </label>
                        <div class="form-group">
                            <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control">
                        </div>
                        <label>Nivel: </label>
                        <div class="form-group">
                            <fieldset class="form-group">
                                        <select class="form-select" id="nivel" name="nivel">
                                        <option value="1">administrador</option>
                                        <option value="2">secretaria</option>
                                </select>
                            </fieldset>
                        </div>
                        <p>Camiar contraseña</p>
                        <br>
                        <label>Nueva contraseña: </label>
                        <div class="form-group">
                            <input type="password" name="cont1" value="" class="form-control">
                        </div>
                        <label>Repita la nueva contraseña: </label>
                        <div class="form-group">
                            <input type="password" name="cont2" value="" class="form-control">
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