<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
$consulta="UPDATE cargo SET estado='0' WHERE id_cargo='$id'";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_cargo.php");
?>