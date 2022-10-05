<?php
    $mihost = $_SERVER['HTTP_HOST'];
    echo "<br>El host al que va la peticion es : " . $mihost;
/*mostrar aqui:
   - el nombre del servidor web
   - el lenguaje
   - el nombre de la pagina actual que realiza la solicitud
   - el tipo de navegador que realiza la solicotid
   */

  echo "<br>El lenguaje / idioma  : " . $_SERVER['HTTP_ACCEPT_LANGUAGE'];

  echo "<br>Nombre pagina actual  : " . $_SERVER['PHP_SELF'];

  echo "<br>El navegador es  : " . $_SERVER['HTTP_USER_AGENT'];