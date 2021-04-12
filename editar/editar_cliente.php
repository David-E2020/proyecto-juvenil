<?php
include('../bd/coneccion.php');
$id=$_GET['id'];
$nombre=$_POST['nombre'];
$nit=$_POST['nit'];

$consulta="UPDATE cliente SET razonsocial='$nombre',nit_cli='$nit' WHERE id_cliente='$id'";

$res=mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_clientes.php");
?>