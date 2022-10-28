<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ((proveedor
    INNER JOIN telefonos_proveedor 
    ON proveedor.rut_proveedor=telefonos_proveedor.rut_proveedor ) INNER JOIN direccion_proveedor
    ON proveedor.rut_proveedor=direccion_proveedor.rut_proveedor ) WHERE proveedor.rut_proveedor=$id
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
                    <form action="updateProveedor.php" method="POST">
                                
                                <label>CI</label>
                                <input type="int" name="CI_proveedor" value="<?php echo $row['CI_proveedor']  ?>">
                                <label>RUT</label>
                                <input type="text" name="rut_proveedor" value="<?php echo $row['rut_proveedor']  ?>">
                                <label> Nombre</label>
                                <input type="text" name="nombre_proveedor" value="<?php echo $row['nombre_proveedor']  ?>">
                                <label>Apellido</label>
                                <input type="text" name="apellido_proveedor" value="<?php echo $row['apellido_proveedor']  ?>">
                                <label>Mail</label>
                                <input type="email" name="email_proveedor" value="<?php echo $row['email_proveedor']  ?>">
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