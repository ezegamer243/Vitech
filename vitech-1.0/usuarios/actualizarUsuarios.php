<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ((empleado 
    INNER JOIN telefonos_empleado  
    ON empleado.CI_empleado=telefonos_empleado.CI_empleado ) INNER JOIN direccion_empleado
    ON empleado.CI_empleado=direccion_empleado.CI_empleado) WHERE empleado.CI_empleado=$id
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
        <link rel="stylesheet" type="text/css" href="ActualizarEmpleados.css">
        
    </head>
    <body>
                <main>
                    <form action="updateEmpleados.php" method="POST">
                    
                                <input type="hidden" name="CI_empleado" value="<?php echo $row['CI_empleado']  ?>">
                                <label> Nombre del Empleado </label>
                                <input type="text" name="nombre_empleado" value="<?php echo $row['nombre_empleado']  ?>">
                                <label>Apellido del empleado</label>
                                <input type="text" name="apellido_empleado" value="<?php echo $row['apellido_empleado']  ?>">
                                <label>Mail</label>
                                <input type="email" name="mail_empleado" value="<?php echo $row['mail_empleado']  ?>">
                                <label>Cargo</label>
                                <input type="text" name="cargo_empleado" value="<?php echo $row['cargo_empleado']  ?>">
                                <label>Telefono</label>
                                <input type="int" name="telefonos"  value="<?php echo $row['telefonos']  ?>">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" value="<?php echo $row['ciudad']  ?>" >
                                <label>Calle</label>
                                <input type="text" name="calle" value="<?php echo $row['calle']  ?>" >
                                <label>Numero Puerta</label>
                                <input type="text" name="numero_puerta" value="<?php echo $row['numero_puerta']  ?>" >

                                
                            <input type="submit" value="Actualizar">
                    </form>
                    
                </main>
    </body>
</html>