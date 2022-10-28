<?php

include("../conexion.php");
$con=conectar();

$CODE=$_POST['cod_producto_final'];
$INAVI=$_POST['etiqueta_INAVI'];
$TYPE=$_POST['tipo_vino'];
$NUM=$_POST['numeracion_tanque'];
$ALMACENAMIENTO=$_POST['tipo_almacenamiiento'];
$ENVASADO=$_POST['fecha_envasado'];
$VENCIMIENTO=$_POST['fecha_vencimiento'];
$CANTIDAD=$_POST['cantidad_producto'];

$sql2="UPDATE producto_final SET etiqueta_INAVI='$INAVI',tipo_vino='$TYPE',numeracion_tanque='$NUM',
tipo_almacenamiiento='$ALMACENAMIENTO',fecha_envasado='$ENVASADO',fecha_vencimiento='$VENCIMIENTO',
cantidad_producto='$CANTIDAD'
WHERE producto_final.cod_producto_final='$CODE'";
$res=mysqli_query($con,$sql2) or die("NO MODIFICA");


    if($res){
        Header("Location: ../crudProdFinal.php");
    }else{
        echo "ERROR";
    }
?>