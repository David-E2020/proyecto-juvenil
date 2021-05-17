<?php
//David Elias Mamani Laura
include('../bd/coneccion.php');
$ci=$_GET['id'];
$usuario=$_POST['usuario'];
$nivel=$_POST['nivel'];

//echo $ci.' '.$usuario.' '.$nivel;

$consulta="UPDATE usuarios SET usuario='$usuario',nivel='$nivel' WHERE ci='$ci'";

$res=mysqli_query($conexion,$consulta);

header("Location: lista_usuarios.php");
?>