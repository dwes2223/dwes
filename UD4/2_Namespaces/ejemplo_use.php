<?php

// Para evitar la referencia cualificada podemos declarar el uso
// Suele hacerse en la cabecera del fichero

use const Dwes\PI;
require "dwes.php";
echo PI;

use function Dwes\avisa;
avisa();

use Dwes\Prueba;
$prueba = new Prueba();
$prueba->probando();

//Cuando utilizamos use podemos renombrar elmentos:
use Dwes\Prueba as Test;
$prueba = new Test();
$prueba->probando();