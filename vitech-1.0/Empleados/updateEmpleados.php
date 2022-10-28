<?php

include("../conexion.php");
$con=conectar();

$CI=$_POST['CI_empleado'];
$NAME=$_POST['nombre_empleado'];
$APE=$_POST['apellido_empleado'];
$MAIL=$_POST['mail_empleado'];
$CARGO=$_POST['cargo_empleado'];
$TEL=$_POST['telefonos'];
$CIU=$_POST['ciudad'];
$CALLE=$_POST['calle'];
$NUM=$_POST['numero_puerta'];

$sql="UPDATE empleado SET nombre_empleado='$NAME',apellido_empleado='$APE',mail_empleado='$MAIL',cargo_empleado='$CARGO'
 WHERE CI_empleado='$CI'";
$res=mysqli_query($con,$sql);

$sql1="UPDATE telefonos_empleado SET  telefonos='$TEL' WHERE CI_empleado='$CI'";
$res=mysqli_query($con,$sql1);

$sql2="UPDATE direccion_empleado SET  ciudad='$CIU',calle='$CALLE',numero_puerta='$NUM' WHERE CI_empleado='$CI'";
$res=mysqli_query($con,$sql2);

    if($res){
        Header("Location: ../crudEmpleados.php");
    }else{
        echo "ERROR";
    }
?>