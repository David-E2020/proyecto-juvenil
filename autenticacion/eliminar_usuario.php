<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
//echo $id;
$consulta="UPDATE usuarios SET estado='0' WHERE ci='$id'";
mysqli_query($conexion,$consulta);

header("Location: lista_usuarios.php");
?>