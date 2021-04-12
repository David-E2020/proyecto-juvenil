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
                <form class="form" method="post" action="../editar/editar_empleado.php?id=<?= $id ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Cargo</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <fieldset class="form-group">
                                    <select class="form-select" name="id_cargo" required>
                                        <?php
                                        $resultado1 = mysqli_query($conexion, "SELECT * FROM cargo");
                                        while ($dato = mysqli_fetch_array($resultado1)) {
                                        ?>
                                            
                                            <option <?php if($id_cargo==$dato['id_cargo']){echo "selected";}?> value="<?= $dato['id_cargo'] ?>"><?= $dato['cargo']?></option>
                                        <?php
                                        }
                                        ?>


                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <label>C.I</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="ci" value="<?php echo $ci ?>" placeholder="carnet de identidad" required>
                            </div>

                            <div class="col-md-4">
                                <label>Nombre</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="nombre" value="<?php echo $nom ?>" placeholder="Digite el/los nombres" required>
                            </div>

                            <div class="col-md-4">
                                <label>Paterno</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="paterno" value="<?php echo $paterno ?>" placeholder="apellido paterno" required>
                            </div>
                            <div class="col-md-4">
                                <label>Materno</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="materno" value="<?php echo $materno ?>" placeholder="apellido materno">
                            </div>

                            <div class="col-md-4">
                                <label>Direccion</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="direccion" value="<?php echo $direccion ?>" placeholder="direccion de vivienda" required>
                            </div>

                            <div class="col-md-4">
                                <label>Telefono</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" class="form-control" name="telefono" value="<?php echo $telefono ?>" placeholder="numero de telefono" required>
                            </div>

                            <div class="col-md-4">
                                <label>Fecha de nacimiento</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="date" class="form-control" name="fechanacimiento" value="<?php echo $fechanacimiento ?>" placeholder="fecha de nacimiento" required>
                            </div>

                            <div class="col-md-4">
                                <label>Genero</label>
                            </div>
                            <div class="col-md-8 form-group">

                                <input class="form-check-input" type="radio" name="genero" value="masculino" <?php if($genero=="M"){echo "checked";}?> required>
                                <label class="form-check-label">
                                    Masculino
                                </label>

                                <input class="form-check-input" type="radio" name="genero" value="femenino" <?php if($genero=="F"){echo "checked";}?> required>
                                <label class="form-check-label">
                                    Femenino
                                </label>
                            </div>

                            <div class="col-md-4">
                                <label>intereses</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <textarea class="form-control" name="intereses" placeholder="Mencione alguno de sus intereses" rows="3"><?php echo $intereses ?></textarea>
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