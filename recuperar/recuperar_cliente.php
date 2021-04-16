<?php
//David Elias Mamani Laura
include('../bd/coneccion.php');
$cantidad=$_GET['id'];
$resultadobb = mysqli_query($conexion, "SELECT * FROM cliente WHERE estado=0");
while ($dato = mysqli_fetch_array($resultadobb)) {
    $est='estado'.$dato['id_cliente'];

    if($_POST[$est]==1){
        echo $dato['id_cliente'];
        $consulta="UPDATE cliente SET estado=1 WHERE id_cliente='$dato[id_cliente]'";
        mysqli_query($conexion,$consulta);
    }
}



header("Location: ../listar/lista_clientes.php");

?>