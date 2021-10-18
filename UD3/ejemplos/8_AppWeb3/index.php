<?php
/*
 * Para decidir qué método ejecutar (index(), login()) utilizamos argumentos GET
 * 
 * http://dwes/UD3/ejemplos/8_AppWeb3/index.php?method=index
 * http://dwes/UD3/ejemplos/8_AppWeb3/index.php?method=login
 * 
 * //equivalente
 * http://dwes/UD3/ejemplos/8_AppWeb3?method=index
 * http://dwes/UD3/ejemplos/8_AppWeb3?method=login
 */
require_once "App.php";
$app = new App;
$app->run();