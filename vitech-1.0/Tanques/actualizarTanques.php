<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

    $sql="SELECT *  FROM (tanque    
    INNER JOIN materia_prima
    ON tanque.cod_materia_prima=materia_prima.cod_materia_prima)
    WHERE tanque.numeracion_tanque=$id
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
                    <form action="updateTanques.php" method="POST">
                        <input type="hidden" name="numeracion_tanque" 
                        value="<?php echo $row['numeracion_tanque']  ?>">
                                <label>Capacidad</label>
                                <input type="text"  name="capacidad_tanque" value="<?php  echo $row['capacidad_tanque']?>">
                                <label>Filtraciones</label>
                                <input type="text" name="cantidad_filtraciones" value="<?php  echo $row['cantidad_filtraciones']?>">
                                <label>Tipo Materia Prima</label>
                                <input type="text" name="tipo_materia_prima" value="<?php  echo $row['tipo_materia_prima']?>">
                                <label>Fecha</label>
                                <input type="date" name="fecha_ingreso_tanque" value="<?php  echo $row['fecha_ingreso_tanque']?>">
                            <input type="submit" value="Actualizar">
                    </form>
                    
                </main>
    </body>
</html>