<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ((tanque
    INNER JOIN almacena
    ON tanque.numeracion_tanque=almacena.numeracion_tanque) 
    INNER JOIN materia_prima
    ON tanque.cod_materia_prima=materia_prima.cod_materia_prima)
    ";
    $query=mysqli_query($con,$sql);
?>

<?php include("include/header.php") ?>

    <section> 
        <form action="Tanques/insertarTanques.php" method="POST">
            <label for="n_t">N° Tanque: </label><input type="number" id="n_t" name="numeracion_tanque" required>
            <label for="c_t">Capacidad: </label><input type="text" id="c_t" name="capacidad_tanque" required>
            <label for="c_f">Filtraciones: </label><input type="number" id="c_f" name="cantidad_filtraciones">
            <label>Codigo/Tipo: </label><select name="cod_materia_prima">
                <option value="0"></option>
                    <?php
                    $resultado=mysqli_query($con,"SELECT * FROM materia_prima");
 
                    while ($fila=$resultado->fetch_assoc()):
                    $CODE=$fila['cod_materia_prima'];
                    $TIPO=$fila['tipo_materia_prima'];
                    echo "<option value=$CODE>$CODE | $TIPO</option>";
                    endwhile;
                    ?>
            </select>
            <label for="f_i_t">Ingreso: </label><input type="date" id="f_i_t" name="fecha_ingreso_tanque">
            <input type="submit" value="Ingresar" class="enviar">
        </form>
    </section>
    <section>
        <table class="tabla">
            <thead>
                <tr>
                    <th>N° Tanque</th>
                    <th>Capacidad</th>
                    <th>Filtraciones</th>
                    <th>Codigo materia prima</th>
                    <th>Tipo materia prima</th>
                    <th>Ingreso</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
             <tbody>
                <?php while($row=mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><?php  echo $row['numeracion_tanque']?></td>
                        <td><?php  echo $row['capacidad_tanque']?></td>
                        <td><?php  echo $row['cantidad_filtraciones']?></td>
                        <td><?php  echo $row['cod_materia_prima']?></td>   
                        <td><?php  echo $row['tipo_materia_prima']?></td>
                        <td><?php  echo $row['fecha_ingreso_tanque']?></td>
                        <td><a href="Tanques/actualizarTanques.php?id=<?php echo $row['numeracion_tanque'] ?>"><i class="fa-solid fa-file-pen"></i></a></td>
                        <td><a href="Tanques/borrarTanques.php?id=<?php echo $row['numeracion_tanque'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><i class="fa-solid fa-trash"></i></a></td>                                       
                     </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>    
</body>
</html>