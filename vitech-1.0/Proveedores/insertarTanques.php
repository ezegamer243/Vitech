<?php
include("../conexion.php");
$con=conectar();

$ID=$_POST['id_almacena'];
$NUM=$_POST['numeracion_tanque'];
$CAP=$_POST['capacidad_tanque'];
$TYPE=$_POST['tipo_materia_prima'];
$CANT=$_POST['cantidad_filtraciones'];
$FECHA=$_POST['fecha_ingreso_tanque'];
$COD=$_POST['cod_materia_prima'];

$sql="INSERT INTO tanque VALUES('$NUM','$CAP','$CANT','$COD','$FECHA')";
$res= mysqli_query($con,$sql);

$sql1="INSERT INTO almacena VALUES('$ID','$COD','$NUM')";
$res= mysqli_query($con,$sql1);


if($res){
    Header("Location: ../crudTanques.php");
    
}
    echo "<a href='crudTanques.php'>";

?>