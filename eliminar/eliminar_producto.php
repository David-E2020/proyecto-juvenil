<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
$consulta="UPDATE producto SET estado='0' WHERE id_producto='$id'";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_producto.php");
?>