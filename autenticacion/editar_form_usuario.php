<?php
include('../bd/coneccion.php');
//$id_emp=substr($_POST['id_empleado'],-1);

//$carnet=explode(" ",$_POST['id_empleado']);
//$carnet=$carnet[0];
$ci=$_GET['id'];
$usuario=$_POST['usuario'];
$contraseña1=$_POST['cont1'];
$contraseña2=$_POST['cont2'];
$nivel=$_POST['nivel'];
//echo $ci.' '.$usuario.' '.$contraseña1.' '.$contraseña2.' '.$nivel;

if(strcmp($contraseña1,$contraseña2)==0){
    $q1="SELECT * FROM usuarios WHERE(ci='$ci')";
    $rs1=mysqli_query($conexion,$q1);
    if(mysqli_num_rows($rs1)!=1){
        echo '<div class="card-body">
            <div class="alert alert-primary">Ususario ya existe.</div>
            </div>';
            header("Location: lista_usuarios.php");
    }else{
        if($contraseña1=="" and $contraseña2==""){
            $consulta="UPDATE usuarios SET usuario = '$usuario', nivel = $nivel WHERE (ci = $ci);";
            //echo $usuario.' '.$nivel.' '.$ci.' '.$contraseña1.' ';
        }else{
            $contraseña1=md5($contraseña1);
            $consulta="UPDATE usuarios SET usuario = '$usuario', nivel = $nivel, password = '$contraseña1' WHERE (ci = $ci);";
            //echo $usuario.' '.$nivel.' '.$ci.' '.$contraseña1.' ';
        }
        mysqli_query($conexion,$consulta);
        echo '<div class="card-body">
            <div class="alert alert-primary">Ususario registrado.</div>
            </div>';
        header("Location: lista_usuarios.php");
    }
}else{
    header("Location: lista_usuarios.php");
    echo '<div class="card-body">
            <div class="alert alert-primary">Ususario No registrado.</div>
            </div>';
}

?>
