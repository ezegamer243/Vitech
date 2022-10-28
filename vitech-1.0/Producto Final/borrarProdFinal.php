<?php

include("../conexion.php");
$con=conectar();

$CODE=$_GET['id'];

$sql="DELETE FROM producto_final WHERE cod_producto_final='$CODE'";
$res=mysqli_query($con,$sql);

    if($res){
        Header("Location: ../crudProdFinal.php");
    }
?>