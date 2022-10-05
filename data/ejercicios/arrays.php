<?php

 // los elemntos son heterogeneos
   $miarray = array(1,"hola",3.0,false);
   $miarray2 = ["elt1", 2 , 4.0];

   echo "<br>Elemento 2 del array : " . $miarray[2];
   //mostrar 
   //foreach , var_dump , print_r ; 
   foreach($miarray as $elmto){
       echo "<br>el elmto es : " . $elmto;
   }
   echo "<br>";
   print_r($miarray);
   echo "<br>";
   var_dump($miarray);

   echo "<br> longitud del array : " . count($miarray);

$array2 = [ 
       3,
       2,
       5,
       9
    ];

    foreach($array2 as &$elto){
        $elto = $elto * 2;
        echo "<br> valor de elto : " . $elto;
    }
    print_r($array2);

  $array2 [] = 15;
  echo "<br>";
  print_r($array2);
  echo "<br>";
  //ELIMINAR UN ELEMENTO
  unset($array2[2]);
  print_r($array2);
  echo "<br> y la posicion 2 ? : " . $array2[2];

  $array2[] = 99;
  echo "<br>";
  print_r($array2);
  $array2[2] = 13;
  echo "<br>";
  print_r($array2);

  $array2[100] = 12;
  echo "<br>";
  print_r($array2);
  $array2[]=7;
  echo "<br>";
  print_r($array2);


  /*
  echo "<br>";
  echo "<br> y QUE DEMONIOS TIENE la posicion 2 ? : " . $array2[2];

  echo "<br> MOSTRAR CLAVE Y VALOR DE ARRAY: ";
  foreach($array2 as $key => $value){
    echo "<br> Clave : " . $key . " y valor: " . $value;
  }

*/
 
$persona = array(
    "edad" => 23,
    "peso " => 75,
    "casado" => false,
    "dni" => "78451122",
    5 => "nss",
    

);
  foreach($persona as  $key => $value){
    echo "<br> Clave : " . $key . " y valor: " . $value;
  }
  echo "<br>";
  print_r($persona);
   
  
  $persona[] = 7;
  echo "<br>";
  print_r($persona);

  $persona[4] = "natacion";
  echo "<br>";
  print_r($persona);

  //
  echo "<br> El dni es : "  . $persona[5];

// arrays multidimensionales : matrices , arrays de arrays
$arrm = [
     0 => [1,3],
     1=> [5,7,9],
];

 echo "<br> Debe salir 3 : "  . $arrm[0][1];
 
