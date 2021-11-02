<?php
/*
* PHP es un protocolo sin estado 
*   -> las diferentes peticiones son independientes
*   -> para asociarlas se usan las sesiones
* 
* Las sesiones permiten guardar información en el lado del servidor
* 
* Al iniciar una sesión el servidor:
*   -> asigna y envía al usuario un identificador de sesión
*   -> en las siguientes peticiones el usuario envía al servidor ese identificador de sesión
*   -> para controlar la sesión el servidor deja una cookie con el id de sesión en el cliente
*/

// Crear sesión: session_start()
// Una vez creada, se usa la variable global $_SESSION para compartir información entre los scripts

session_start();
if ( !isset ($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
echo "hola".$_SESSION['count'];
echo "<br><a href='2_sesiones_uso_basico2.php'>Siguiente</a>";

// Eliminar un elemento de la sesión
unset($_SESSION['count']);

// Borrar toda la sesión
session_destroy();