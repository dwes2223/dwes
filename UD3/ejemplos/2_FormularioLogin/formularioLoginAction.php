<?php
    //Procesa el formulario
    // Si login y password correctos -> redirige a bienvenida
    // En caso contrario redirige a una página de error
    // Para la redirección se usa la función header
    if ($_POST['usuario'] == "usuario" and $_POST['clave'] == '1234') {
        header ("Location:bienvenido.html") ;
    } else {
        header ("Location:error.html") ;
    }
    