<?php 
include('bd/coneccion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$inscrip=$_POST['inscripcion'];

// echo "$nombre $paterno $materno $direccion $celular $email $inscrip";

//creamos la consulta

$consulta="UPDATE instructor SET nombre='$nombre',paterno='$paterno',materno='$materno',
direccion='$direccion',celular='$celular',email='$email',fecha_inscripcion='$inscrip' WHERE id_instructor='$id'";
mysqli_query($conexion,$consulta);

header("Location: lista_instructores.php");

?>