<?php
include("../conexion.php");
$con=conectar();

$CI=$_POST['CI_cliente'];
$RUT=$_POST['rut_cliente'];
$NOMBRE=$_POST['nombre_cliente'];
$APELLIDO=$_POST['apellido_cliente'];
$MAIL=$_POST['email_cliente'];
$TEL=$_POST['telefonos'];
$CIUDAD=$_POST['ciudad'];
$CALLE=$_POST['calle'];
$NUM=$_POST['numero_puerta'];


$sql="INSERT INTO cliente VALUES('$CI','$RUT','$NOMBRE','$APELLIDO','$MAIL')";
$res= mysqli_query($con,$sql);

$sql="INSERT INTO telefonos_cliente VALUES('$RUT','$TEL')";
$res= mysqli_query($con,$sql);

$sql="INSERT INTO direccion_cliente VALUES('$RUT','$CIUDAD','$CALLE','$NUM')";
$res= mysqli_query($con,$sql);

if($res){
    Header("Location: ../crudClientes.php");
    
}else {
    echo "ERROR!!";
}
?>