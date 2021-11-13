<?php
/*
    Si no se declara los elementos pertenecen al namespace global (\)
    Ejemplo de espacios anidados: namespaces Dwes\Controllers
*/

// guardado en dwes.php
namespace Dwes;

const PI = 3.14;
function avisa() {
    echo "Te estoy avisando";
} 
class Prueba {
    public function probando() {
        echo "Esto es una prueba";
    }
}

?>