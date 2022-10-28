<?php

include("../conexion.php");
$con=conectar();

$CODE=$_GET['id'];

$sql="DELETE FROM materia_prima WHERE cod_materia_prima='$CODE'";
$res=mysqli_query($con,$sql);

    if($res){
        Header("Location: ../crudStock.php");
    }
?>
