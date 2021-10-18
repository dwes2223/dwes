<?php
/*
 * sessiones1_principal.php
 *  --> vinculo salir -> sesiones1_logout.php
 */ 

// Abre la sesión
session_start();

//Comprueba que realmente el login se ha realizado correctamente
if ( !isset($_SESSION['usuario'])) {
    header("Location:sesiones1_login.php?redirigido=true");
}

//Si la variable está definida muestra un mensaje de bienvenida
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Página principal</title>
    </head>
    <body>
        <?php echo "Bienvenido ".$_SESSION['usuario'];?>
        <br> <a href = "sesiones1_logout.php">Salir</a>
    </body>
</html>