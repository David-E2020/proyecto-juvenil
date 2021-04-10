<?php 
include('../bd/coneccion.php');
$id_proveedor=$_POST['id_proveedor'];
$nombreproducto=$_POST['nombreproducto'];
$descripcion=$_POST['descripcion'];
$costocompra=$_POST['costocompra'];
$costoventa=$_POST['costoventa'];
$stock=$_POST['stock'];
$fecha=$_POST['fecha'];
//echo "$id_cargo $ci $nombre $paterno $materno $direccion $telefono $fechanacimiento $genero $intereses";

//creamos la consulta
 

$consulta="INSERT INTO producto(`id_proveedor`, `nombreproducto`, `descripcion`, `costocompra`, `costoventa`, `stock`, `fecha`)
VALUES ('$id_proveedor','$nombreproducto','$descripcion','$costocompra','$costoventa','$stock','$fecha')";
mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_producto.php");

?>