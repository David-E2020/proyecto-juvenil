<?php
include("bd/coneccion.php");
$us=$_POST['usr'];
$pw=$_POST['passwd'];
$psw1=md5($pw);
$consulta="SELECT * FROM usuarios WHERE usuario='$us' and password='$psw1'";

$res=mysqli_query($conexion,$consulta);
if(mysqli_num_rows($res)!=0){
    session_start();
    $_SESSION['ingreso']='si';
    if($reg=mysqli_fetch_array($res)){
        $_SESSION['id_empleado']=$reg['id_empleado'];
        $_SESSION['nombre']=$reg['usuario'];
        $_SESSION['nivel']=$reg['nivel'];
    }
    header("location:admin.php");
}else{
    header("location:index.php?error=1");
}


?>