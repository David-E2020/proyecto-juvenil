<?php 
include('bd/coneccion.php');
$id=$_GET["id"];

$consulta="DELETE FROM estudiantes WHERE id_estudiante=$id";

mysqli_query($conexion,$consulta);

header("Location: lista_estudiantes.php");

?>