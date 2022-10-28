<?php 
    include("conexion.php");
    $con=conectar();

$sql="SELECT * FROM ((proveedor
    INNER JOIN telefonos_proveedor 
    ON proveedor.rut_proveedor=telefonos_proveedor.rut_proveedor ) INNER JOIN direccion_proveedor
    ON proveedor.rut_proveedor=direccion_proveedor.rut_proveedor )";
    $query=mysqli_query($con,$sql);
?>

<?php include("include/header.php") ?>

    <section> 
        <form action="Proveedores/insertarProveedor.php" method="POST">
            <label for="r_p">RUT: </label><input type="number" id="r_p" name="rut_proveedor" required>
            <label for="n_p">Nombre: </label><input type="number" id="n_p" name="nombre_proveedor" required>
            <label for="a_p">Apellido: </label><input type="text" id="a_p" name="apellido_proveedor">
            <label for="e_p">Apellido: </label><input type="text" id="e_p" name="email_proveedor" required>
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
                        <td><?php  echo $row['rut_proveedor']?></td>
                        <td><?php  echo $row['nombre_proveedor']?></td>
                        <td><?php  echo $row['apellido_proveedor']?></td>   
                        <td><?php  echo $row['email_proveedor']?></td>                        
                        <td><?php  echo $row['telefonos']?> </td>
                        <td><?php  echo $row['ciudad']?> </td>
                        <td><?php  echo $row['calle']?> </td>
                        <td><?php  echo $row['numero_puerta']?> </td>    
                        <td><a href="Proveedores/actualizarProveedor.php?id=<?php echo $row['rut_proveedor'] ?>"><i class="fa-solid fa-file-pen"></i></a></td>
                        <td><a href="Proveedores/borrarProveedor.php?id=<?php echo $row['rut_proveedor'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><i class="fa-solid fa-trash"></i></a></td>                                        
                     </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>    
</body>
</html>