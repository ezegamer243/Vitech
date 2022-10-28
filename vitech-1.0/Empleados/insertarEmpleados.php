<?php
include("../conexion.php");
$con=conectar();

$CI=$_POST['CI_empleado'];
$NOMBRE=$_POST['nombre_empleado'];
$APELLIDO=$_POST['apellido_empleado'];
$MAIL=$_POST['mail_empleado'];
$CARGO=$_POST['cargo_empleado'];
$TEL=$_POST['telefonos'];
$CIUD=$_POST['ciudad'];
$CALLE=$_POST['calle'];
$NUM=$_POST['numero_puerta'];



$sql="INSERT INTO empleado VALUES('$CI','$NOMBRE','$APELLIDO','$MAIL','$CARGO')";
$res= mysqli_query($con,$sql);


$sql1="INSERT INTO telefonos_empleado VALUES('$CI','$TEL')";
$res= mysqli_query($con,$sql1);

$sql2="INSERT INTO direccion_empleado VALUES('$CI','$CIUD','$CALLE','$NUM')";
$res= mysqli_query($con,$sql2);

if($res){
    Header("Location: ../crudEmpleados.php");
    
}else {
    echo "ERROR!!";
}
?>