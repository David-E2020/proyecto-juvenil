<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
$consulta="UPDATE cliente SET estado='0' WHERE id_cliente='$id'";

$res=mysqli_query($conexion,$consulta);

if($res){
    ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Se elimino correctamente. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
}else{
    ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
            No se elimino correctamente. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
}


header("Location: ../listar/lista_clientes.php");
?>