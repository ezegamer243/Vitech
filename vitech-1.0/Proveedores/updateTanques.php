<?php

include("../conexion.php");
$con=conectar();

$NUM=$_POST['numeracion_tanque'];
$CAP=$_POST['capacidad_tanque'];
$CANT=$_POST['cantidad_filtraciones'];
$FECHA=$_POST['fecha_ingreso_tanque'];
$COD=$_POST['cod_materia_prima'];

$sql="UPDATE tanque SET  numeracion_tanque='$NUM',capacidad_tanque='$CAP',
cantidad_filtraciones='$CANT', fecha_ingreso_tanque='$FECHA'
 WHERE numeracion_tanque='$NUM'";
$res=mysqli_query($con,$sql);


    if($res){
        Header("Location: ../crudTanques.php");
    }else{
        echo "ERROR";
    }
?>