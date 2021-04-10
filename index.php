
<?php
//include('bd/coneccion.php');
//include_once('bd/coneccion.php');
include('encabezado.php');
?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Horarios de clases</h3>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id</th><th>Dia</th><th>Hora</th><th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end">
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-edit"></i>  Nuevo Horario</a>
                </div>
            </div>
        </div>

    </section>
</div>

<?php 
include_once('pie.php');
?>
