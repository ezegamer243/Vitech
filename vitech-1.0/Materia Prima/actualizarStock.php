<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT *  FROM (materia_prima
    INNER JOIN abastece
    ON materia_prima.cod_materia_prima=abastece.cod_materia_prima) 
    WHERE materia_prima.cod_materia_prima=$id
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
                    <form action="updateStock.php" method="POST">
                        <input type="hidden" name="cod_materia_prima" 
                        value="<?php echo $row['cod_materia_prima']  ?>">
                                <label>tipo</label>
                                <input type="text"  name="tipo_materia_prima" value="<?php  echo $row['tipo_materia_prima']?>">
                                <label>Procedencia</label>
                                <input type="text" name="procedencia_materia_prima" value="<?php  echo $row['procedencia_materia_prima']?>">
                                <label>Cantidad</label>
                                <input type="text" name="cantidad_entrega" value="<?php  echo $row['cantidad_entrega']?>">
                                <label>Fecha</label>
                                <input type="date" name="fecha_entrega" value="<?php  echo $row['fecha_entrega']?>">
                            <input type="submit" value="Actualizar">
                    </form>
                    
                </main>
    </body>
</html>