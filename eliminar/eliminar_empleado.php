<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
$consulta="UPDATE empleado SET estado='0' WHERE id_empleado='$id'";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_empleado.php");
?>