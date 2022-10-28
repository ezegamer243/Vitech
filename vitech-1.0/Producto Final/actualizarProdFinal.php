<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

    $sql="SELECT *  FROM (producto_final
    INNER JOIN pasa
    ON producto_final.cod_producto_final=pasa.cod_producto_final) 
   WHERE producto_final.cod_producto_final=$id
    ";
    $res=mysqli_query($con,$sql);


$row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        
    </head>
    <body>
                <main>
                    <form action="updateProdFinal.php" method="POST">
                        <input type="hidden" name="cod_producto_final" 
                        value="<?php echo $row['cod_producto_final']  ?>">
                                <label>Etiqueta INAVI</label>
                                <input type="text"  name="etiqueta_INAVI" value="<?php  echo $row['etiqueta_INAVI']?>">
                                <label>Tipo</label>
                                <input type="text" name="tipo_vino" value="<?php  echo $row['tipo_vino']?>">
                                <label>N° Tanque</label>
                                <input type="text" name="numeracion_tanque" value="<?php  echo $row['numeracion_tanque']?>">
                                <label>Almacenamiento</label>
                                <input type="text" name="tipo_almacenamiiento" value="<?php  echo $row['tipo_almacenamiiento']?>">
                                <label>Fecha envase</label>
                                <input type="date" name="fecha_envasado" value="<?php  echo $row['fecha_envasado']?>">
                                <label>Fecha ven</label>
                                <input type="date" name="fecha_vencimiento" value="<?php  echo $row['fecha_vencimiento']?>">
                                <label>Cantidad</label>
                                <input type="text" name="cantidad_producto" value="<?php  echo $row['cantidad_producto']?>">
                            <input type="submit" value="Actualizar">
                    </form>
                    
                </main>
    </body>
</html>