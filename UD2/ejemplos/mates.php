function SegundoGrado ($a, $b, $c) {
    $ecu=(-$b+(sqrt((pow($b,2)-4*$a*$c))))/2*$a;

  
    if(is_nan($ecu)){
        $ecu="False";
    }

  
    $ecu1=(-$b-(sqrt(pow($b,2)-4*$a*$c)))/2*$a;


    if(is_nan($ecu1)){
        $ecu1   ="False";
    }

    $resultado = array("+ : "=>$ecu, "- : " =>$ecu1);

    return  $resultado;
}