<?php

include("../conexion.php");
$con=conectar();

$CI=$_GET['id'];

$sql="DELETE FROM cliente WHERE CI_cliente='$CI'";
$res=mysqli_query($con,$sql);

    if($res){
        Header("Location: ../crudClientes.php");
    }
?>
