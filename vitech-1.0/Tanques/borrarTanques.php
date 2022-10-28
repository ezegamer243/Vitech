<?php

include("../conexion.php");
$con=conectar();

$COD=$_GET['id'];

$sql1="DELETE FROM tanque WHERE tanque.numeracion_tanque='$COD'"; 
$res=mysqli_query($con,$sql1);

    if($res){
        Header("Location: ../crudTanques.php");
    }
?>
