<?php
/*
* Una cookie es un fichero de texto que se guarda en el equipo del cliente.
* Este fichero está ligado al sitio web que lo crea y al navegador usado.
* En él se almacena el contenido de un array de variables.
* Ejemplo: para almacenar información sobre la última visita, preferencias del idioma...
*/

// Se crea mediante la función setcookie(). 
// setcookie (nombre_cookie, valor, fecha_exp); 
// la fecha de expiración se expresa en segundos
setcookie ('nueva', '1', time() + 3600 * 24);

// Se accede a su contenido mendiante la variable superglobal $_COOKIE
echo "Valor de la cookie: ". $_COOKIE['nueva'];

// Para eliminar una cookie usa setcookie con tiempo menor al actual: 
setcookie ('nueva', '1', time() - 3600 * 24);

// Las cookies se envían como cabeceras de la peticiones HTTP 
//  -> Hay que enviar las cookies antes de que se empiece a escribir la salida
//  -> Si se llama a setcookie después de haber realizado un echo -> error