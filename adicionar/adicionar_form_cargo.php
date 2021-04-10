<?php 
include('../bd/coneccion.php');
$cargo=$_POST["cargo"];

//echo "$nombre $paterno $materno $direccion $celular $email $inscripcion $horario";


$consulta="INSERT INTO cargo (cargo) VALUES ('$cargo')";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_cargo.php");

?>