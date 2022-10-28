<?php

//Definimos las variables guardadas en la DB
$CI = $_POST['CI_empleado'];
$pass= $_POST['contraseña'];

//Iniciamos la Sesion del usuario
session_start();
  $_SESSION['CI_empleado']=$CI;

//Llamamos la conexion con la DB
include("../conexion.php");
  $con=conectar();  

//Consultamos a la DB el usuario y contraseña ('CI_empleado' y 'contraseña')
$consulta="SELECT * FROM usuarios 
  WHERE CI_empleado='$CI' AND contraseña='$pass'";

//La funcion nos da un resultado y la guardamos en $res
$res=mysqli_query($con,$consulta);
//Guardamos las variables en un array
$fila=mysqli_num_rows($res);

//
if ($fila) {
  header("Location: ../principal.php");
}else {
?>
  <?php
  echo"ERROR"; 
  header("Location: ../index.php");
  ?>
  
<?php 
}
mysqli_free_result($res);
mysqli_close($con);
?> 