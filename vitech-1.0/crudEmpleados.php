<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ((empleado
    INNER JOIN telefonos_empleado
    ON empleado.CI_empleado=telefonos_empleado.CI_empleado) INNER JOIN direccion_empleado
    ON empleado.CI_empleado=direccion_empleado.CI_empleado)";
    $query=mysqli_query($con,$sql);
?>

<?php include("include/header.php") ?>

    <section> 
        <form action="Empleados/insertarEmpleados.php" method="POST">
            <label for="ci_e">CI: </label><input type="number" id="ci_e" name="CI_empleado" required>
            <label for="n_e">Nombre: </label><input type="text" id="n_e" name="nombre_empleado" required>
            <label for="a_e">Apellido: </label><input type="text" id="a_e" name="apellido_empleado" required>
            <label for="t">Telefono: </label><input type="text" id="t" name="telefonos">
            <label for="m_e">Email: </label><input type="text" id="m_e" name="mail_empleado">
            <label for="c_e">Cargo: </label><input type="text" id="c_e" name="cargo_empleado" required>
            <label for="ciu">Ciudad: </label><input type="text" id="ciu" name="ciudad">
            <label for="cal">Calle: </label><input type="text" id="cal" name="calle">
            <label for="n_p">N° Puerta: </label><input type="number" id="n_p" name="Puerta">
            <input type="submit" value="Ingresar" class="enviar">
        </form>
    </section>
    <section>
        <table class="tabla">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>N° Puerta:</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
             <tbody>
                <?php while($row=mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><?php  echo $row['CI_empleado']?></td>
                        <td><?php  echo $row['nombre_empleado']?></td>
                        <td><?php  echo $row['apellido_empleado']?></td>
                        <td><?php  echo $row['telefonos']?></td>
                        <td><?php  echo $row['mail_empleado']?></td>
                        <td><?php  echo $row['cargo_empleado']?></td>
                        <td><?php  echo $row['ciudad']?></td>
                        <td><?php  echo $row['calle']?></td>
                        <td><?php  echo $row['numero_puerta']?></td>
                        <td><a href="empleados/actualizarEmpleados.php?id=<?php echo $row['CI_empleado'] ?>"><i class="fa-solid fa-file-pen"></i></a></td>
                        <td><a href="empleados/borrarEmpleados.php?id=<?php echo $row['CI_empleado'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>    
</body>
</html>