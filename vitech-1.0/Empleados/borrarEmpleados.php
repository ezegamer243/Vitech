<?php

include("../conexion.php");
$con=conectar();

$CI=$_GET['id'];

$sql="DELETE FROM empleado WHERE empleado.CI_empleado='$CI'"; 
$res=mysqli_query($con,$sql);

    if($res){
        Header("Location: ../crudEmpleados.php");
    }
?>
