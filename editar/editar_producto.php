<?php 
//David Elias Mamani Laura
include('../bd/coneccion.php');
$id=$_GET['id'];
$id_proveedor=$_POST['id_proveedor'];
$nombreproducto=$_POST['nombreproducto'];
$descripcion=$_POST['descripcion'];
$costocompra=$_POST['costocompra'];
$costoventa=$_POST['costoventa'];
$stock=$_POST['stock'];
$fecha=$_POST['fecha'];
//echo "$id_cargo $ci $nombre $paterno $materno $direccion $telefono $fechanacimiento $genero $intereses";

$consulta="UPDATE producto SET id_proveedor='$id_proveedor',nombreproducto='$nombreproducto',descripcion='$descripcion',costocompra='$costocompra',costoventa='$costoventa',stock='$stock',fecha='$fecha' WHERE id_producto='$id'";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_producto.php");

?>