<?php

$paises = array (
    'España' => array(
        'moneda' => 'Euro',
        'poblacion' => '43.000.000'
    ), 
    'Estados Unidos' => array(
        'moneda' => 'Dollar',
        'poblacion' => '326.000.000'
    ),  
    'Inglaterra' => array(
        'moneda' => 'Libra',
        'poblacion' => '68.451.684'
    ),  
    'Alemania' => array(
        'moneda' => 'Euro',
        'poblacion' => '84.000.000'
    ),  
);
echo($paises['España']['moneda']);
echo "<pre>";
print_r($paises);
echo "</pre>";