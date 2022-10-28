<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>

<?php include("include/header.php") ?>

    <section> 
        <form action="usuarios/insertarUsuarios.php" method="POST">
            <label for="ci_e">N° Tanque: </label><input type="number" id="ci_e" name="CI_empleado" required>
            <label for="pass">Capacidad: </label><input type="text" id="pass" name="contraseña" required>
            <input type="submit" value="Ingresar" class="enviar">
        </form>
    </section>
    <section>
        <table class="tabla">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>Contraseña</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
             <tbody>
                <?php while($row=mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><?php  echo $row['CI_empleado']?></td>
                        <td><?php  echo $row['contraseña']?></td>
                        <td><a href="usuarios/actualizarUsuarios.php?id=<?php echo $row['CI_empleado'] ?>"><i class="fa-solid fa-file-pen"></i></a></td>
                        <td><a href="usuarios/borrarUsuarios.php?id=<?php echo $row['CI_empleado'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><i class="fa-solid fa-trash"></i></a></td>                                       
                     </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>    
</body>
</html>