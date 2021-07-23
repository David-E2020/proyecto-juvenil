<?php
session_start();
//include("../../seguridad.php");
//David Elias Mamani Laura

//$_SESSION["carrito_Ventas1"]=array(array("id_producto"=>$_POST["id_producto"],"cantidad"=>$_POST["cantidad"]));
echo $_POST['id_producto'].' '.$_POST['cantidad'];

/*
if(!empty($_POST)){
    if(isset($_POST["id_producto"]) && isset($_POST["cantidad"])){
        //si es el primer producto simplemente lo agregamos
        if(empty($_SESSION["carrito_ventas1"])){
            $_SESSION["carrito_Ventas1"]=array(array("id_producto"=>$_POST["id_producto"],"cantidad"=>$_POST["cantidad"]));
            //$_SESSION['id_producto']=$_POST['id_empleado'];
            //$_SESSION['cantidad']=$_POST['cantidad'];
        }else{
            //a partir del segundo producto
            $carro=$_SESSION["carrito_ventas1"];
            $repetido = false;
            //recorremos el carro en busca de productos repetidos
            foreach($carro as $c){
                //si el producto esta repetido rompemos el ciclo
                if($c["id_producto"]==$_POST["id_producto"]){
                    $repetido=true;
                    break;
                }
            }
            //si el producto es repetido no hacemos nada, simplemente redirigimos
            if($repetido){
                print "<script>alert('El producto ya esta añadido! ');</script>";
            }else{
                //si el producto no esta repetido
                array_push($carro,array("id_producto"=>$_POST["id_producto"],"cantidad"=>$_POST["cantidad"]));
                $_SESSION["carrito_ventas1"] =  $carro;
            }
        }
        //print "<script>wndows.location='../registroventa.php';</script>"; 
        header("Location: ../registroventa.php");
    }
}*/
?>