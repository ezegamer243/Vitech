<?php

include("../conexion.php");
$con=conectar();

$RUT=$_GET['id'];

$sql1="DELETE FROM proveedor WHERE proveedor.rut_proveedor='$RUT'"; 
$res=mysqli_query($con,$sql1);

    if($res){
        Header("Location: ../crudProveedor.php");
    }
?>
