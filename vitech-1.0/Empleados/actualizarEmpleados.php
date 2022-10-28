<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios";
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
        <link rel="stylesheet" type="text/css" href="ActualizarEmpleados.css">
        
    </head>
    <body>
                <main>
                    <form action="updateEmpleados.php" method="POST">
                    
                                <input type="hidden" name="CI_empleado" value="<?php echo $row['CI_empleado']  ?>">
                                <label> Contraseña </label>
                                <input type="password" name="contraseña" value="<?php echo $row['contraseña']  ?>">

                                
                            <input type="submit" value="Actualizar">
                    </form>
                    
                </main>
    </body>
</html>