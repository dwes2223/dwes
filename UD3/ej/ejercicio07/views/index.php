<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Funciones</title>
</head>
<body>

  <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>


  <h1>FUNCION --> <?= $this->operacion ?></h1>
  
  <?php

  foreach($this->arrayNumeros as $num){
    echo $num."<br/>";
  }
  ?>
</body>
</html>