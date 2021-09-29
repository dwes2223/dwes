<?php

/*
 * El array $_GET tiene un elemento por cada argumento presente en la URL
 * El nombre del argumento será la clave del elemento del array
 */

//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false
if(isset($_GET) && !empty($_GET)){
    echo "Recibido!! Mira la URL en tu navegador<hr>";
    echo "Bienvenido ".$_GET[nombre]. " ". $_GET[apellidos]."<br>";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
    var_dump($_GET);
}
 else {
     echo "No hemos recibido nada!";
}
