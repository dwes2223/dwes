<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Ester Grao";
    $this->student = "Fulano De Tal";
  }

  public function run()
  {
    //Desde aquí contralamos la lógica de negocio -> qué método ejecutar
    echo "Moneda al aire... <hr>";
    $moneda = rand(0,1);
    // if ($moneda == 1) {
    if ($moneda) {
      echo "<h3>Ha salido cara:  </h3> <br>";
      $this->index();
    } else {
      echo "<h3> Ha salido cruz: </h3> <br>";
      $this->login();
    }
  }

  public function index()
  {
    // Mostrar la vista al usuario -> el restultado
    echo "Estamos en el index<br>";
    echo "Estos es $this->name<br>";
    echo "Me llamo $this->student<br>";
    echo "Estamos estudiando $this->module con el profesor $this->teacher<br>";
  }
  
  public function login()
  {
    echo "Ahora podría mostrar un formulario de login <br>";
  }  
}
