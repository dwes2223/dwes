<?php
/*
* Para controlar las excepciones se usan bloque try-catch-finally
*/

//Excepciones -> se lanzan para indicar errores
function dividir ($a, $b) {
    if ( $b == 0) {
        throw new Exception ('El segundo argumento es 0');
    }
    return $a/$b;
}
try {
    $res = dividir (5, 0);
    echo "Resultado $res <br>";
} catch (Exception $e) {
    echo "Excepcion ".$e->getMessage()."<br>";
} finally {
    echo "Primer finally<br>";
}
try {
    $res = dividir (5, 2);
    echo "Resultado $res <br>";
} catch (Exception $e) {
    echo "Excepcion ".$e->getMessage()."<br>";
} finally {
    echo "Segundo finally<br>";
}

// PHP7 introdujo las excepciones de tipo error
//      - No heredan de la clase Exception
// para capturarlas catch (Error e)



