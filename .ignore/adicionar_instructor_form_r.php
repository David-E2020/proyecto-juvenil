<?php 
include('bd/coneccion.php');
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$grado=$_GET['grado'];
$inscripcion=$_POST['inscripcion'];

//echo "$nombre $paterno $materno $direccion $celular $email $inscripcion $horario";

//creamos la consulta

$consulta="INSERT INTO instructor(nombre,paterno,materno,direccion,celular,email,fecha_inscripcion,grado) 
VALUES ('$nombre','$paterno','$materno','$direccion','$celular','$email','$inscripcion','$grado')";
mysqli_query($conexion,$consulta);

header("Location: lista_instructores.php");

?>