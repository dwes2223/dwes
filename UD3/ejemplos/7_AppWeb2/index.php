<?php
require_once "App.php";

/*
* Separar la vista lógica:
*   Los cálculos los hacemos dentro de un método de la clase (php puro).
*   El html lo generaremos en un fichero mixto html/php.
*/
$app = new App;
$app->run();