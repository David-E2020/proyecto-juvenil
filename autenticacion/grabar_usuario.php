<?php
include('../bd/coneccion.php');
$id_emp=substr($_POST['id_empleado'],-1);
$carnet=explode(" ",$_POST['id_empleado']);
$carnet=$carnet[0];
$nomUsuario=$_POST['nombre_usuario'];
$contraseña1=$_POST['contraseña1'];
$contraseña2=$_POST['contraseña2'];
$nivel=$_POST['nivel'];

if(strcmp($contraseña1,$contraseña2)==0){
    $q1="SELECT * FROM usuarios WHERE(ci='$carnet')";
    $rs1=mysqli_query($conexion,$q1);
    if(mysqli_num_rows($rs1)!=0){
        echo '<div class="card-body">
            <div class="alert alert-primary">Ususario ya existe.</div>
            </div>';
            header("Location: registrar_usuario.php");
    }else{
        $contraseña1=md5($contraseña1);
        //echo $carnet.' '.$id_emp.' '.$nomUsuario.' '.$contraseña1.' '.$nivel;
        $consulta="INSERT INTO usuarios (ci,id_empleado,usuario,password,nivel) 
        VALUES ($carnet,$id_emp,'$nomUsuario','$contraseña1',$nivel);";

        mysqli_query($conexion,$consulta);
        echo '<div class="card-body">
            <div class="alert alert-primary">Ususario registrado.</div>
            </div>';
        header("Location: lista_usuarios.php");
    }
}
?>