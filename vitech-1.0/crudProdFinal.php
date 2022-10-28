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
        <form action="Producto Final/insertarProdFinal.php" method="POST">
            <label for="c_p_f">Codigo: </label><input type="number" id="c_p_f" name="cod_producto_final" required>
            <label for="e_i">Etiqueta INAVI: </label><input type="number" id="e_i" name="etiqueta_INAVI" required>
            <label for="t_v">Tipo: </label><input type="text" id="t_v" name="tipo_vino" required>
            <label for="">Nº Tanque: </label><select name="numeracion_tanque" required>
                <option value=""></option>
                <?php
                    $resultado=mysqli_query($con,"SELECT * FROM tanque");
                    while ($fila=$resultado->fetch_assoc()):
                    $CODE=$fila['numeracion_tanque'];
                    $TIPO=$fila['capacidad_tanque'];
                    echo "<option value=$CODE>$CODE | $TIPO lts</option>";
                    endwhile; 
                ?>
            </select>
            <label for="t_a">Almacenamiento: </label><input type="text" id="t_a" name="tipo_almacenamiiento">
            <label for="f_e">Envasado: </label><input type="date" id="f_e" name="fecha_envasado">
            <label for="f_v">Vencimiento: </label><input type="date" id="f_v" name="fecha_vencimiento">
            <label for="c_p">Cantidad: </label><input type="text" id="c_p" name="cantidad_producto">
            <input type="submit" value="Ingresar" class="enviar">
        </form>
    </section>
    <section>
        <table class="tabla">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>INAVI</th>
                    <th>Tipo</th>
                    <th>N° tanque</th>
                    <th>Almacenamiento</th>
                    <th>Envasado</th>
                    <th>Vencimiento</th>
                    <th>cantidad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
             <tbody>
                <?php while($row=mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><?php  echo $row['cod_producto_final']?></td>
                        <td><?php  echo $row['etiqueta_INAVI']?></td>
                        <td><?php  echo $row['tipo_vino']?></td>
                        <td><?php  echo $row['numeracion_tanque']?></td>
                        <td><?php  echo $row['tipo_almacenamiiento']?></td>
                        <td><?php  echo $row['fecha_envasado']?></td>
                        <td><?php  echo $row['fecha_vencimiento']?></td>
                        <td><?php  echo $row['cantidad_producto']?></td>
                        <td><a href="Producto Final/actualizarProdFinal.php?id=<?php echo $row['cod_producto_final']?>"><i class="fa-solid fa-file-pen"></i></a></td>
                        <td><a href="Producto Final/borrarProdFinal.php?id=<?php echo $row['cod_producto_final'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>123123</td>
                    <td>1231231</td>
                    <td>rosado dulce</td>
                    <td>12</td>
                    <td>barrica</td>
                    <td>12/07/2022</td>
                    <td>12/07/2068</td>
                    <td>5000lts</td>
                </tr>
                <tr>
                    <td>123123</td>
                    <td>1231231</td>
                    <td>rosado dulce</td>
                    <td>12</td>
                    <td>barrica</td>
                    <td>12/07/2022</td>
                    <td>12/07/2068</td>
                    <td>5000lts</td>
                </tr>                <tr>
                    <td>123123</td>
                    <td>1231231</td>
                    <td>rosado dulce</td>
                    <td>12</td>
                    <td>barrica</td>
                    <td>12/07/2022</td>
                    <td>12/07/2068</td>
                    <td>5000lts</td>
                </tr>                <tr>
                    <td>123123</td>
                    <td>1231231</td>
                    <td>rosado dulce</td>
                    <td>12</td>
                    <td>barrica</td>
                    <td>12/07/2022</td>
                    <td>12/07/2068</td>
                    <td>5000lts</td>
                </tr>                <tr>
                    <td>123123</td>
                    <td>1231231</td>
                    <td>rosado dulce</td>
                    <td>12</td>
                    <td>barrica</td>
                    <td>12/07/2022</td>
                    <td>12/07/2068</td>
                    <td>5000lts</td>
                </tr>
            </tbody>
        </table>
    </section>    
</body>
</html>