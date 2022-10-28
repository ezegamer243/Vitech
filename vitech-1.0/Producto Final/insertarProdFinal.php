<?php
include("../conexion.php");
$con=conectar();

$CODF=$_POST['cod_producto_final'];
$INAVI=$_POST['etiqueta_INAVI'];
$TIPO=$_POST['tipo_vino'];
$TANQUE=$_POST['numeracion_tanque'];
$ALMACENAMIENTO=$_POST['tipo_almacenamiiento'];
$ENVASADO=$_POST['fecha_envasado'];
$VENCIMIENTO=$_POST['fecha_vencimiento'];
$CANTIDAD=$_POST['cantidad_producto'];

$sql="INSERT INTO producto_final VALUES('$CODF','$INAVI','$TIPO','$TANQUE','$ALMACENAMIENTO','$ENVASADO','$VENCIMIENTO','$CANTIDAD')";
$res=mysqli_query($con,$sql);
$sql1="INSERT INTO pasa VALUES('$TANQUE','$CODF')
";
$res=mysqli_query($con,$sql1);




if($res){
    Header("Location: ../crudProdFinal.php");
    
}else {
    echo "ERROR!!";
}
?>