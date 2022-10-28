<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ((cliente 
    INNER JOIN telefonos_cliente
    ON cliente.rut_cliente=telefonos_cliente.rut_cliente) INNER JOIN direccion_cliente
    ON cliente.rut_cliente=direccion_cliente.rut_cliente)
    WHERE CI_cliente='$id'";
$res=mysqli_query($con,$sql);

$row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="actualizarCliente.css">
    <title>Actualizar Registros de Clientes</title>
</head>
<body>

    <div class="logo">
        <img src="../imagenes/vitech_blancoynegro.svg" alt="Logo Vitech" title="Logo de Vitech">
        <header>
    </div>
            <h1>Modificar los Datos del Empleado</h1>
        </header>


    <main>
        <div class="label">
                               
           
           
            
            
                        
        </div>

        <form action="updateCliente.php" method="POST" class="insertar">
            
            <input type="hidden" name="rut_cliente" value="<?php echo $row['rut_cliente']  ?>">
                              <label for="CI_cliente">Cedula</label>   
            <input type="text" name="CI_cliente" value="<?php echo $row['CI_cliente']  ?>">
 <label for="nombre_cliente" >Nombre</label>
            <input type="text" name="nombre_cliente" value="<?php echo $row['nombre_cliente']  ?>">
 <label for="apellido_cliente">Apellido</label>
            <input type="text" name="apellido_cliente" value="<?php echo $row['apellido_cliente']  ?>">
<label for="mail_cliente" >Mail</label>
            <input type="email" name="email_cliente" value="<?php echo $row['email_cliente']  ?>">       
            <label for="telefonos">Telefono</label>
            <input type="int" name="telefonos" value="<?php echo $row['telefonos']  ?>">
<label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" value="<?php echo $row['ciudad']  ?>">
            <label for="calle">Calle</label>

            <input type="text" name="calle" value="<?php echo $row['calle']  ?>">
            <label for="numero_puerta">Numero Puerta</label>
            <input type="text" name="numero_puerta" value="<?php echo $row['numero_puerta']  ?>">

            <input type="submit" value="Ingresar" class="enviar">
            <button class="regresar"><a href="crudClientes.php" class="regresar">Regresar</button></a>
        </form>
    </main>

</body>
</html>