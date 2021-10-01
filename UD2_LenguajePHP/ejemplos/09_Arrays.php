<?php

/*
* El tipo array unifica todas las estructuras de datos (vectores, listas o diccionario)
* Los elementos de un array se identifican por una clave que puede ser un entero o una cadena
* El orden está determinado por la inserción
*/

//las cuatro sentencias son equivalentes
$frutas = ['manzana', 'naranja', 'uva'];
$frutas = array('manzana', 'naranja', 'uva');
$frutas = [0 => 'manzana', 1 => 'naranja', 2 => 'uva'];
$frutas = array(0 => 'manzana', 1 => 'naranja', 2 => 'uva');


//Podemos combinar tipos de datos
$array = [2, 'naranja', 3.1416];
echo "Me gustan la $array[2]";

//Añadir elementos
$frutas[] = 'manzana'; // si fruta está vacío, posición 0
$frutas[] = 'naranja'; // ahora posición 1
$frutas[2] = 'uva'; //ahora posición 2 porque lo ponemos, o cualquier otra.

//Quitar elementos
//unset($frutas[0]);

//Recorrer un array
echo 'Prueba foreach<br>';
foreach ($frutas as $fruta){
    echo $fruta . '<br>';
}
echo 'Prueba foreach clave - valor<br>';
foreach ($frutas as $clave => $fruta){
    echo $clave . ": " . $fruta . '<br>';
}


//Ejemplo de un array sin claves
$arr = array ( 10, 20, 30, 40);
print_r($arr);
echo "<br>";
$arr[] = 5;
print_r($arr);
echo "<br>";
$arr[10] = 6;
$arr[] = 5;
print_r($arr);
echo "<br>";

/*
 * Array asociactivo
 * Se usan las claves para referenciar cada valor
 */
$alumno = array (
    'id' => 5,
    'nombre' => 'Manuel',
    'apellido' => 'García López',
    'edad' => 23
);
$alumno['sexo'] = "V"; //y podemos añadir elementos
print_r($alumno);

//Otro ejemplo
$arr1 = [
    0 => 444,
    1 => 222,
    2 => 333
];
print_r($arr1);
echo "<br>"."pos 0: ".$arr1[0]."<br>";
$arr1[0] = 555;
print_r($arr1);
echo "<br>";

$arr2 = array (
    "1111A" => "Marta Lopez Vela",
    "1112A" => "Luis Perez Tovar",
    "1113A" => "Elena Molina Garzarán"   
);
$arr2["1113A"] = "Elena Molina Gonzalvo"; 

//Recorrer el array
foreach ($arr2 as $nombre) {
    echo "$nombre <br>";
}

foreach ($arr2 as $codigo => $nombre) {
    echo "Código: $codigo Nombre: $nombre <br>";
}

//Modificar el array dentro de un bucle
foreach ($arr1 as &$cantidad) {
    $cantidad = $cantidad * 2;
}
print_r($arr1);

//Arrays multidimensionales
$filas  = [
    0 => [11, 12],
    1 => [21, 22],
    3 => [31, 32]
];
 echo "<br>Multi:".$filas[0][0];
 print_r($filas[0]);

