<?php
require_once "App.php";

/*
* Separar el código según su función:
*   Los cálculos los hacemos dentro de un método de la clase (php puro).
*   El html lo generaremos en un fichero mixto html/php.
*/
$app = new App;
$app->run();