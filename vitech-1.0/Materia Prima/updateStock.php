<?php

include("../conexion.php");
$con=conectar();

$ID=$_POST['id_abastece'];
$COD=$_POST['cod_materia_prima'];
$TYPE=$_POST['tipo_materia_prima'];
$PROCE=$_POST['procedencia_materia_prima'];
$CANT=$_POST['cantidad_entrega'];
$FECHA=$_POST['fecha_entrega'];
$RUT=$_POST['rut_proveedor'];

$sql2="UPDATE materia_prima SET tipo_materia_prima='$TYPE',procedencia_materia_prima='$PROCE' 
WHERE cod_materia_prima='$COD'";
$res=mysqli_query($con,$sql2) or die("NO MODIFICA");

$sql="UPDATE abastece SET id_abastece='$ID',rut_proveedor='$RUT',cod_materia_prima='$COD',cantidad_entrega='$CANT',
fecha_entrega='$FECHA' 
WHERE id_abastece='$ID'";
$res=mysqli_query($con,$sql) or die("NO MODIFICA");


    if($res){
        Header("Location: ../crudStock.php");
    }else{
        echo "ERROR";
    }
?>