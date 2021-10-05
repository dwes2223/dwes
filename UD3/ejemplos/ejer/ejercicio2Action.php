<?php

  $nombreCompleto = $_POST['nombreCompleto'];
  $nombresAlmacenados = ["Javier", "Arturo", "Adrian", "Juan"];
  if (in_array($nombreCompleto, $nombresAlmacenados, false))
    echo "Saludos, $nombreCompleto.";
  else {
    include('ejercicio2.php');
    echo "<br>No se ha encontado el nombre en la array 'nombresAlmacenados'.";
  }

