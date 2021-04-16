<!--Modal Xl size -->
<div class="mr-1 d-inline-block">
    <!-- Button trigger for Extra Large  modal -->
    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#xlarge">
        reestablecer clientes
    </button>

    <!--Extra Large Modal //David Elias Mamani Laura-->
    <div class="modal modal-borderless fade text-left w-100" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Clientes eliminados</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form class="form" method="post" action="../recuperar/recuperar_cliente.php?id=<?= $id ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>Id cliente</th>
                                        <th>estado</th>
                                        <th>razon socail</th>
                                        <th>nit</th>
                                        <th>acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $resultadobb = mysqli_query($conexion, "SELECT * FROM cliente WHERE estado=0");
                                    while ($dato = mysqli_fetch_array($resultadobb)) {
                                        $id = $dato['id_cliente'];
                                        $estado = $dato['estado'];
                                        $nombre = $dato['razonsocial'];
                                        $nit = $dato['nit_cli'];
                                        //estado 1 activo
                                        //estado 0 inactivo
                                        if ($estado == 1) {
                                            $est = 'Activo';
                                        } else {
                                            $est = 'Inactivo';
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $est ?></td>
                                            <td><?= $nombre ?></td>
                                            <td><?= $nit ?></td>
                                            <td>
                                            <div class="col-md-8 form-group">
                                                <input class="form-check-input" type="radio" name="estado<?=$id?>" value="0" checked required>
                                                <label class="form-check-label">off</label>

                                                <input class="form-check-input" type="radio" name="estado<?=$id?>" value="1" required>
                                                <label class="form-check-label">on</label>
                                            </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>