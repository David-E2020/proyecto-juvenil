<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
$consulta="UPDATE proveedor SET estado='0' WHERE id_proveedor='$id'";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_proveedor.php");
?>