<?php
//David Elias Mamani Laura
include('../bd/coneccion.php');
$id=$_GET['id'];
$nombre=$_POST['nombre'];

$consulta="UPDATE cargo SET cargo='$nombre' WHERE id_cargo='$id'";

$res=mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_cargo.php");
?>