<?php 
//David Elias Mamani Laura
include('../bd/coneccion.php');
$id=$_GET['id'];
$id_cargo=$_POST['id_cargo'];
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$fechanacimiento=$_POST['fechanacimiento'];
$genero=$_POST['genero'];
if($genero=='masculino'){$genero='M';
}else{$genero='F';}
$intereses=$_POST['intereses'];
 

/*$consulta="INSERT INTO empleado(`id_cargo`, `ci`, `nombre`, `paterno`, `materno`, `direccion`, `telefono`, `fechanacimiento`, `genero`, `intereses`)
VALUES ('$id_cargo','$ci','$nombre','$paterno','$materno','$direccion','$telefono','$fechanacimiento','$genero','$intereses')";
mysqli_query($conexion,$consulta);*/

$consulta="UPDATE empleado SET id_cargo='$id_cargo',ci='$ci',nombre='$nombre',paterno='$paterno',materno='$materno',direccion='$direccion',telefono='$telefono',fechanacimiento='$fechanacimiento',genero='$genero',intereses='$intereses' WHERE id_empleado='$id'";
$res=mysqli_query($conexion,$consulta);

header("Location: ../listar/lista_empleado.php");

?>