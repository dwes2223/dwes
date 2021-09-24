<?php

/*
* Funciones y librerias
* En PHP no es necesario declarar el tipo de datos que devuelve la función, y puede devolver tipos de datos diferentes según el caso
*/

// Funciones predefinidas
$var = 4;
echo is_null ($var); // Devuelve TRUE si el valor de la variable es nulo, false en otro caso
echo isset($var);  // devuelve TRUE si la variable ha sido inicializada
unset($var); // Elimina la variable, ya no está inicializada
echo empty($var); // Devuelve true si la variable no ha sido inicializada o su valor es falso


// funciones definidas por el usuario 
// no es necesario declarar el tipo de dato devuelto
function suma ($a, $b) {
    return $a + $b;
}
$var1 = 12;
$var2 = 5;
$var3 = suma ($var1, $var2);


// especificar valores por defecto para los argumentos
function saludar ($nombre = 'usuario') {
    echo "Hola $nombre <br>";
}
saludar();
saludar("Ana");

// paso de argumentos por copia y por valor
// en PHP los argumentos se pasan por copia 
// para utiliar la referencia debe añadirse el símbolo & antes del argumento
function duplicar ($a) {
    $a = $a * 2;
}
$var = 3;
duplicar ($var);
echo "$var1 <br>";


function convertirMayuscula ($arr) {
    foreach ($arr as $element){
        strtoupper($element);
    }
    print_r($arr);
}
$nombres = ["candela", "hugo", "emma", "matias"];
convertirMayuscula ($nombres);
print_r($nombres);

//Funciones como argumentos

