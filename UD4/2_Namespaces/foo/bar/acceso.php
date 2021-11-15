<?php

namespace Foo\Bar;
include "foo.php";

// Acceso sin cualificar
// Las búsquedas son en cualquier fichero de el namespace actual
echo "<br>Acceso sin cualificar<br>";
echo FOO; //constante FOO en el espacio Foo\Bar
foo(); //ejecuta la función Foo\Bar\foo()
//$objeto = new MiClase(); //objeto de la clase Foo\Bar\Miclase



// Acceso totalmente cualificado
// El elemento se refiere a un namespace desde el global
echo "<br>Acceso totalmente cualificado";
$Foo = \Foo\Bar\foo();
$Foo; //ejecuta la función Foo\Bar\foo()