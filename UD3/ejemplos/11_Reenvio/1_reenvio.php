<?php

/*
* Habitualmente una petición acaba con la construcción de una vista html.
* Pero otras veces queremos que el servidor haga una tarea y después el navegador vaya a una dirección determinada.
* Por ejemplo:
*   auth: toma los datos de login. Si son "buenos" reenvía a "home" y si son malos reenvía a "login" de nuevo.
* Con php debemos hacer esto con la función header.
*/

header('Location: direccion');
header('Location: /index.php');
header('Location: ?method=home');
header('Location: https://google.com');
