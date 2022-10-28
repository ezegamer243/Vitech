<?php
    include("conexion.php");
    $con=conectar();

?>
<?php include("include/header.php") ?>




<div class="filtro">  
    <div class="form-body">
        <form class="form-login" action="login/validar.php" method="POST">
            <div class="logologin">
                <img src="iconos/logo.png" alt="">
            </div>
                <h2>Inicio de sesión</h2>
            <div class="input">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="CI_empleado" placeholder="Ingrese usuario" required="true">
            </div>
            <div class="input">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="contraseña" placeholder="Ingrese contraseña" required="true">
            </div>
            <a href="">¿Olvidaste tu contraseña?</a>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</div>   
</body>
</html>