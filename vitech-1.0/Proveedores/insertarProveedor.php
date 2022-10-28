<?php
include("../conexion.php");
$con=conectar();

$RUT=$_POST['rut_proveedor'];
$NOMBRE=$_POST['nombre_proveedor'];
$APELLIDO=$_POST['apellido_proveedor'];
$MAIL=$_POST['email_proveedor'];
$TEL=$_POST['telefonos'];
$CIUD=$_POST['ciudad'];
$CALLE=$_POST['calle'];
$NUM=$_POST['numero_puerta'];


$sql="INSERT INTO proveedor VALUES('$RUT','$NOMBRE','$APELLIDO','$MAIL')";
$res= mysqli_query($con,$sql);

$sql1="INSERT INTO telefonos_proveedor VALUES('$RUT','$TEL')";
$res= mysqli_query($con,$sql1);

$sql2="INSERT INTO direccion_proveedor VALUES('$RUT','$CIUD','$CALLE','$NUM')";
$res= mysqli_query($con,$sql2);

if($res){
    Header("Location: ../crudProveedor.php");
    
}else {
    echo "ERROR!!";
}
?>