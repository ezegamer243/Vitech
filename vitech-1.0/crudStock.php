<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ((materia_prima
    INNER JOIN abastece
    ON materia_prima.cod_materia_prima=abastece.cod_materia_prima) 
    INNER JOIN proveedor
    ON proveedor.rut_proveedor=abastece.rut_proveedor)";
    $query=mysqli_query($con,$sql);
?>

<?php include("include/header.php") ?>

    <section> 
        <form action="Materia Prima/insertarStock.php" method="POST">
            <label for="c_m_p">Codigo: </label><input type="number" id="c_m_p" name="cod_materia_prima" required>
            <label for="t_m_p">Tipo: </label><input type="text" id="t_m_p" name="tipo_materia_prima" required>
            <label for="p_m_p">Procedencia: </label><input type="text" id="p_m_p" name="procedencia_materia_prima" required>
            <label for="">RUT/Proveedor: </label><select name="rut_proveedor">
                <option value="0"></option>
                <?php
                    $resultado=mysqli_query($con,"SELECT * FROM proveedor"); 
                    while ($fila=$resultado->fetch_assoc()):
                    $RUT=$fila['rut_proveedor'];
                    $nombre=$fila['nombre_proveedor'];
                    echo "<option value=$RUT>$RUT | $nombre</option>";
                    endwhile;
                ?>
            </select>
            <label>Cantidad: </label><input type="text" name="cantidad_entrega">
            <label>Entrega: </label><input type="date" name="fecha_entrega">

            <input type="submit" value="Ingresar" class="enviar">
        </form>
    </section>
    <section>
        <table class="tabla">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Tipo</th>
                    <th>Procedencia</th>
                    <th>CI</th>
                    <th>RUT</th>
                    <th>Cantidad</th>
                    <th>Entrega</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Mail</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
             <tbody>
                <?php while($row=mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><?php  echo $row['cod_materia_prima']?></td>
                        <td><?php  echo $row['tipo_materia_prima']?></td>
                        <td><?php  echo $row['procedencia_materia_prima']?></td>
                        <td><?php  echo $row['rut_proveedor']?></td>
                        <td><?php  echo $row['cantidad_entrega']?></td>
                        <td><?php  echo $row['fecha_entrega']?></td>
                        <td><?php  echo $row['nombre_proveedor']?></td>
                        <td><?php  echo $row['apellido_proveedor']?></td>
                        <td><?php  echo $row['email_proveedor']?></td>
                        <td><a class="editar" href="Materia Prima/actualizarStock.php?id=<?php echo $row['cod_materia_prima'] ?>"><i class="fa-solid fa-file-pen"></i></a></td>
                        <td><a class="borrar" href="Materia prima/borrarStock.php?id=<?php echo $row['cod_materia_prima'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>    
</body>
</html>