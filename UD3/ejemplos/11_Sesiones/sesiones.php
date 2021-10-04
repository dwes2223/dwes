<?php

/*
* PHP es un protocolo son estado -> las diferentes peticiones son independientes
*   -> para asociarlas se usan las sesiones
* Al iniciar una sesión el servidor:
*   -> asigna y envía al usuario un identificador de sesión
*   -> en las siguientes peticiones el usuario envía al servidor ese identificador de sesión
*   -> para controlar la sesión el servidor deja una cookie con el id de sesión en el cliente
*/

// Crear sesión: start_session()
// Una vez creada, se usa la variable global $_SESSION para compartir información entre los scripts

session_start();
if ( !isset ($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
echo "hola".$_SESSION['count'];
echo "<br><a href='sesiones_uso_basico2.php'>Siguiente</a>";