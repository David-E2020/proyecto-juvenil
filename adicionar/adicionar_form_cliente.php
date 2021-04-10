<?php 
include('../bd/coneccion.php');
$razonsocial=$_POST['razonsocial'];
$nit_cli=$_POST['nit_cli'];


$consulta="INSERT INTO cliente(razonsocial,nit_cli) VALUES ('$razonsocial','$nit_cli')";

$res=mysqli_query($conexion,$consulta);

if($res){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            Se registro correctamente
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            No se regostro correctamente
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>;
    
    ';
}

header("Location: ../listar/lista_clientes.php");

?>