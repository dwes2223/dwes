<?php
  
  //globales
 $var1 =  6;
 $var2 = 7;

  function suma($a, $b){
    global $var1;
    global $var2;
    $var1 = 99;
    $var2=100;

    unset($var2); //borro una variable

    echo "<br>La variable dentro de la funcion var1 y var2 son : " . $var1 . " y " . $var2;    

    //definicion variables estatica
     static $varestatica = 0;
     echo "<br>El valor de la var estatica es : " . $varestatica;
     $varestatica++; 


      return $a + $b;

  }
  echo "<br>La variable a y b son : " . $a . " y " . $b;
  echo "<br>La variable FUERA de la funcion var1 y var2 son : " . $var1 . " y " . $var2;    
  echo "<br>Llamada a suma 1 vez :  " . suma(3,5);
  echo "<br>Llamada a suma 2 vez :  " . suma(3,5);
  echo "<br>Llamada a suma 3 vez :  " . suma(3,5);




