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

$sql="UPDATE cliente SET CI_cliente='$CI',rut_cliente='$RUT',nombre_cliente='$NOMBRE',
apellido_cliente='$APELLIDO',email_cliente='$MAIL'
WHERE cliente.rut_cliente='$RUT'
";
$res=mysqli_query($con,$sql);

$sql1="UPDATE telefonos_cliente SET telefonos='$TEL'
WHERE telefonos_cliente.rut_cliente='$RUT'
";
$res=mysqli_query($con,$sql1);

$sql2="UPDATE direccion_cliente SET ciudad='$CIUDAD',calle='$CALLE',numero_puerta='$NUM'
WHERE direccion_cliente.rut_cliente='$RUT'
";
$res=mysqli_query($con,$sql2);



 if($res){
        Header("Location: ../crudClientes.php");
    }else{
        echo "ERROR";
    }

?>