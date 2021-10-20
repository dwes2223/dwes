<?php

/*
 * En PHP, la librería FileSystem incluye funcines para leer y escribir ficheros
 */

 // Abrir ficheros
 // r: Apertura para lectura. Puntero al principio del archivo
 // r+: Apertura para lectura y escritura. Puntero al principio del archivo
 // w: Apertura para escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
 // w+  Apertura para lectura y escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
 // a   Apertura para escritura. Puntero al final del archivo. Si no existe se intenta crear.
 // a+  Apertura para lectura y escritura. Puntero al final del archivo. Si no existe se intenta crear.
 // x   Creación y apertura para sólo escritura. Puntero al principio del archivo. Si el archivo ya existe dará error E_WARNING. Si no existe se intenta crear.
 // x+  Creación y apertura para lectura y escritura. Mismo comportamiento que x


 // r: Solo lectura
 // r+: Lectura y escritura
 // w: Solo escritura
 // w+: Lectura y escritura
 // a: escritura al final. Las escrituras se realizan al final
 // a+: lectura y escritura. Las escrituras se realizan al final

$fich = fopen ("fichero_ejemplo.txt", "r");
if ( $fich == FALSE ) {
    echo "No se encuentra el fichero <br>";
} else {
    echo "El fichero se abrió con éxito <br>";
}

$fich2 = fopen ("fichero_no_existe.txt", "r");
if ( $fich2 == FALSE) {
    echo "No se encuentra el fichero <br>";
} else {
    echo "El fichero se abrió con éxito <br>";
}

// La lectura y escritura se realizan al partir del indicador de posición
// Si se abre en modo a o a+: el indicador se situa al final


// eof devuelve true cuando ya ha llegado al final
while ( !eof($fich) ) {
    // fscanf lee una linea y le aplica un formato
    $num = fscanf( $fich, "%d %d %d %d" );
    echo "$num[0] $num[1] $num[2] $num[3] <br>";
}
// fclose para cerrar el fichero
fclose( $fich );

//Ejemplo de escritura
$file = fopen( "archivo.txt", "w" );
fwrite( $file, "Esto es una nueva linea de texto" . PHP_EOL );
fwrite( $file, "Otra más" . PHP_EOL );
fclose( $file );

//Ejemplo de añadir texto
$file = fopen( "archivo.txt", "a" );
fwrite( $file, "Linea anexada en: " . time() . PHP_EOL );
fclose($file);


// Devuelve una cadena con el contenido de un fichero
$contenido = file_get_contents ( "fichero_ejemplo.txt" );
echo "Contenido: $contenido <br>";

// Escribe datos en un fichero
$res = file_put_contents( "fichero_salida.txt", "fichero creado" );

