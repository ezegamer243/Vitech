<?php
include("../conexion.php");
$con=conectar();

$ID=$_POST['id_abastece'];
$COD=$_POST['cod_materia_prima'];
$TYPE=$_POST['tipo_materia_prima'];
$PROCE=$_POST['procedencia_materia_prima'];
$RUT=$_POST['rut_proveedor'];
$CANT=$_POST['cantidad_entrega'];
$FECHA=$_POST['fecha_entrega'];

$sql="INSERT INTO materia_prima VALUES('$COD','$TYPE','$PROCE')";
$res= mysqli_query($con,$sql);

$sql1="INSERT INTO abastece VALUES('$ID','$RUT','$COD','$CANT','$FECHA')";
$res= mysqli_query($con,$sql1);


if($res){
    Header("Location: ../crudStock.php");
    
}
    echo "<a href='crudStock.php'>";

?>