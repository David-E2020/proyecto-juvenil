<?php 
include('../bd/coneccion.php');
$empresa=$_POST['empresa'];
$contacto=$_POST['contacto'];
$mail=$_POST['mail'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$a=$_FILES['imagen']['name'];
$b=$_FILES['imagen']['tmp_name'];

//creamos la consulta

$consulta="INSERT INTO proveedor(empresa,contacto,mail,telefono,direccion,logo) 
VALUES ('$empresa','$contacto','$mail','$telefono','$direccion','$a')";

$res=mysqli_query($conexion,$consulta);
if($res){
    @copy($b,"imagenes_proveedor/".$a);
    echo "<cript>
        alert('se registro correctamente')
        </script>";
}else{
    echo "<cript>
        alert('no se registro correctamente')
        </script>";
}
header("Location: ../listar/lista_proveedor.php");

?>