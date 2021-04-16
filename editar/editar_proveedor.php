<?php 
//David Elias Mamani Laura
include('../bd/coneccion.php');
$id=$_GET['id'];
$empresa=$_POST['empresa'];
$contacto=$_POST['contacto'];
$mail=$_POST['mail'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$logo=$_POST['logo'];

$a=$_FILES['imagen']['name'];
$b=$_FILES['imagen']['tmp_name'];
if($a==""){
    $consulta="UPDATE proveedor SET empresa='$empresa',contacto='$contacto',mail='$mail',telefono='$telefono',direccion='$direccion' WHERE id_proveedor='$id'";
}else{
    $consulta="UPDATE proveedor SET empresa='$empresa',contacto='$contacto',mail='$mail',telefono='$telefono',direccion='$direccion',logo='$a' WHERE id_proveedor='$id'";
}

$res=mysqli_query($conexion,$consulta);
if($res && $a!=""){
    @unlink("../imagenes_proveedor/"."$logo");
    @copy($b,"../imagenes_proveedor/".$a);
    echo "<script>
        alert('se registro correctamente')
        </script>";
}else if($res && $a==""){
    echo "<script>
        alert('se registro correctamente')
        </script>";
}else{
    echo "<script>
        alert('No se registro correctamente')
        </script>";
}
header("Location: ../listar/lista_proveedor.php");

?>