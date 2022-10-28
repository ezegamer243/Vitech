<?php
include("../conexion.php");
$con=conectar();

$CI=$_POST['CI_empleado'];
$PASS=$_POST['contraseña'];


$sql="INSERT INTO usuarios VALUES('$CI','$PASS')";
$res= mysqli_query($con,$sql);



if($res){
    Header("Location: ../crudUsuarios.php");
    
}elseif ($res){
    echo "Error";
    }
    echo "<a href='../crudUsuarios.php'>";

?>