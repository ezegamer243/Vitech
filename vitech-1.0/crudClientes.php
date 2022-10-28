<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ((cliente
        INNER JOIN telefonos_cliente
        ON cliente.rut_cliente=telefonos_cliente.rut_cliente)INNER JOIN direccion_cliente
        ON cliente.rut_cliente=direccion_cliente.rut_cliente) 
        ";
    $query=mysqli_query($con,$sql);
?>

<?php include("include/header.php") ?>

    <section> 
        <form action="Clientes/ingresoCliente.php" method="POST" required>
            <label for="ci_c">CI: </label><input type="number" id="ci_c" name="CI_cliente" required>
            <label for="r_c">RUT: </label><input type="number" id="r_c" name="rut_cliente" required>
            <label for="n_c">Nombre: </label><input type="text" id="n_c" name="nombre_cliente" required>
            <label for="a_p">Apellido: </label><input type="text" id="a_p" name="apellido_cliente">
            <label for="e_c">Email: </label><input type="text" id="e_c" name="email_cliente">
            <label for="t">Telefono: </label><input type="text" id="t" name="telefonos">
            <label for="ciu">Ciudad: </label><input type="text" id="ciu" name="ciudad">
            <label for="cal">Calle: </label><input type="text" id="cal" name="calle">
            <label for="n_p">N° Puerta: </label><input type="text" id="n_p" name="Puerta">
            <input type="submit" value="Ingresar" class="enviar">
        </form>
    </section>
    <section>
        <table class="tabla">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>N° Puerta</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
             <tbody>
                <?php while($row=mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><?php  echo $row['CI_cliente']?></td>
                        <td><?php  echo $row['rut_cliente']?></td>
                        <td><?php  echo $row['nombre_cliente']?></td>
                        <td><?php  echo $row['apellido_cliente']?></td>   
                        <td><?php  echo $row['email_cliente']?></td>
                        <td><?php  echo $row['telefonos']?></td>
                        <td><?php  echo $row['ciudad']?></td>
                        <td><?php  echo $row['calle']?></td>
                        <td><?php  echo $row['numero_puerta']?></td>
                        <td><a href="Clientes/actualizarCliente.php?id=<?php echo $row['CI_cliente'] ?>">Editar</a></td>
                        <td><a href="Clientes/borrarCliente.php?id=<?php echo $row['CI_cliente'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">Eliminar</a></td>                                        
                     </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>    
</body>
</html>