<?php 
include('bd/coneccion.php');
$id=$_GET["id"];

$consulta="DELETE FROM instructor WHERE id_instructor=$id";

mysqli_query($conexion,$consulta);

header("Location: lista_instructores.php");

?>