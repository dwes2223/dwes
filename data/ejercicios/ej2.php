<?php
  $var1 = 5;
  $var2 = "7";
//   $var2 = (int)"7";

  $var3 = (string)8;
  $var4 = "";
  $var5 = 0;
  

      echo "Var1 es del tipo : " . gettype($var2);

    echo " La variable 3 esta definida : ? " . isset($var3) . "<br>";
    echo "<br>La variable 4 esta definida : ? " . isset($var4);
    echo "<br>La variable 5 esta definida : ? " . isset($var5);

    echo " La variable 3 esta vacia : ? " . empty($var3) . "<br>";
    echo "<br>La variable 4 esta vacia: ? " . empty($var4);
    echo "<br>La variable 6 esta vacia : ? " . empty($var6);

    const MICONST =  100;

    define('OTRACONST', 200);
    echo "<br> la constante es :  " .  MICONST;

    $num1 = 3;
    $num2 = 7;

    if($num1 <=> $num2){
      echo "<br> Son iguales";
    }else{
        echo "<br> Son diferentes";
    }



     
   // comentario linea
   /*
      varias lineas
   */

   
  /*
    variables: [A-Z,a-z,0-9]
       - no pueden comenzar con numeros , ni carac
       especiales (@,#, ?, -) 
       _.

       Casesensitive : 
          JAVA -> SI
          PHP -> a medias:  
             - las variables -> si.
                 $MIVAR  diferente $mivar diferente $MIvar
              - los metodos -> no
                  METODO1 =  metodo1 = Metodo1
    ---------------
    TIPOS DE DATOS:
        int , string, boolean , float
        arrays , objetos , ficheros

        boolean = true  (1) y false (0)

        Tipado de lenguaje programacion:
           - Fuerte:  JAVA
           - Debil: PHP


        
        gettype(); 
        
      OPERADORRES
      ====================
       = , < ,> ...  !=  , <>, == , === , <=>

       if(){}  ; if(){}else{} 

       if(){

       }elseif{

       }else{

       }
        while(){}   ;  do{}while() ;  
        $miarray
        for($i = 0 ; $i<10 ; $i++){
            $miarray[$i];
        }
        
        foreach($array as $elmto){

        }

        Inclusion de codigo de un fichero en otro:
        include ,  include_once  , require , require_once;
        
        */
  



