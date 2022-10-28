<?php

include("../conexion.php");
$con=conectar();

$RUT=$_POST['rut_proveedor'];
$NAME=$_POST['nombre_proveedor'];
$APE=$_POST['apellido_proveedor'];
$MAIL=$_POST['email_proveedor'];
$TEL=$_POST['telefonos'];
$CIU=$_POST['ciudad'];
$CALLE=$_POST['calle'];
$NUM=$_POST['numero_puerta'];

$sql="UPDATE proveedor SET  rut_proveedor='$RUT',nombre_proveedor='$NAME',
apellido_proveedor='$APE', email_proveedor='$MAIL'
 WHERE rut_proveedor='$RUT'";
$res=mysqli_query($con,$sql);

$sql1="UPDATE telefonos_proveedor SET  telefonos='$TEL' 
WHERE rut_proveedor='$RUT'";
$res=mysqli_query($con,$sql1);

$sql2="UPDATE direccion_proveedor SET  ciudad='$CIU', calle='$CALLE', numero_puerta='$NUM' 
WHERE rut_proveedor='$RUT'";
$res=mysqli_query($con,$sql2);

    if($res){
        Header("Location: ../crudProveedor.php");
    }else{
        echo "ERROR";
    }
?>