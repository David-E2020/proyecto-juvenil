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
$id_horario=$_POST['horario_clases'];
//creamos la consulta
$consulta="UPDATE estudiantes SET nombre='$nombre',paterno='$paterno',materno='$materno',
direccion='$direccion',celular='$celular',email='$email',fecha_inscripcion='$inscrip',id_horario='$id_horario' WHERE id_estudiante='$id'";
mysqli_query($conexion,$consulta);
header("Location: lista_estudiantes.php");
?>