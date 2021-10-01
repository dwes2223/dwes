<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios</title>
</head>
<body>
  <h1>Ejemplos y ejercicios php</h1>
  <?php
    $ejemplo=1;
  ?>
  
  <h2>Ejemplos</h2>
  <h3>Programar con scripts</h3>
  <ol>
    <li>
    <a href="/dwes/UD2/ejemplos/01_CodigoIncrustado.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Código incrustado
    </li>

    <li>
      <a href="/dwes/UD2/ejemplos/02_SintaxisBasica.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Sintaxis básica.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/03_TiposVariables.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Declaraciones de variables.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/04_AsignacionCopiaRef.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Asignación por copia y referencia.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/05_TipoVariablesCastings.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Castings.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/06_estructurasControl.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Estructuras de control.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/07_EstructurasRepeticion.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Estructuras de repetición.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/08_DibujarTabla.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Uso de constantes y bucles para construir una tabla 10x10.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/09_Arrays.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Arrays.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/10_Arrays_II.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Arrays, más ejemplos.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/11_Arrays_III.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Arrays, más ejemplos.
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/12_Arrays_IV.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Arrays: Imprimir una ficha con tus datos personales guardados en variables (nombre, apellidos, edad, teléfono, email, ...).
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/13_Arrays_V.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Arrays multidimensionales .
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/14_Arrays_VI.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Arrays, variable global $_server .
    </li>
    <li>
      <a href="/dwes/UD2/ejemplos/15_FuncionesLibrerias.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Funciones y librerias.
    </li>

    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
    Primer formulario: $_GET, $_POST, $_REQUEST
    </li>

    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
    Formulario con más cosas...
    </li>

    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
    Y uno que se envía las cosas a sí mismo!
    </li>

      <ul>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Crea un formulario para enviar los datos de registro de un libro: título, autor, editorial, páginas.
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Crea un formulario para enviar campo nombre. Si el nombre existe se da un saludo. Si no existe se vuelve atrás indicando que el campo es obligatorio.
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Envío del script al mismo script.
          Crea un formulario para enviar campo nombre. El nombre debe existir y debe tener un tamaño mínimo de 3 caracteres. Si es válido se da un saludo. Si no lo es se vuelve a mostar el formulario indicando que el campo es obligatorio y mostrando en el "input" el valor anterior no válido.
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Envío del script al mismo script. Crea un formulario que funcione como calculadora. Debe contener dos input como operandos y un select para elegir operador.
            <ul>
              <li> Si se reciben los datos muestra el resultado. </li>
              <li> Si no son válidos o no existen debe mostrar de nuevo el formulario de calculadora.</li>
            </ul>
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Crea un formulario que envíe un array de 3 nombres. Para hacerlo debes usar el mismo nombre en todos los input (name="nombres[]").
        </li>
      </ul>

    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
    Como montar una lista usando inputs y arrays
      <ul>
      <li>
          <a href="/dwes/UD2/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Crea una lista usando etiquetas ul y li. La lista inicialmente estará vacía pero un formulario con un input servirá para añadir los elementos. Usa input de tipo hidden para que no "olvidar" los elementos ya añadidos a la lista.
        </li>
      </ul>
    </li>
    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
    Uso de funciones
    </li>
    <h3>POO</h3>
    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Mi primera clase.
    </li>
    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Una clase como aplicación (I)
    </li>
    <li>
    <a href="/dwes/UD2/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Una clase como aplicación (II)
    </li>
    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Una clase como aplicación (III)
    </li>
      <ul>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Ejercicio sobre POO y series numéricas (fibonacci, factorial, primos y potencias de 2). Enunciado en apuntes
        </li>
      </ul>
    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Cookies
    </li>
    <ul>
      <li>
        <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
        Cookies 1 (ver apuntes)
      </li>
      <li>
        <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
        Cookies 2 (ver apuntes)
      </li>
    </ul>
    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo++);  ?></a>
      Sesiones. Ver vídeo
    </li>
    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>/" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
      Sesiones con POO. Ver víedo
    </li>
    <ul>
      <li>
        <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
        Ejercicio igual al 19 pero con sesiones
      </li>
      <li>
        <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
        Ejercicio igual al 20 pero con sesiones
      </li>
    </ul>
  </ol>

</body>
</html>