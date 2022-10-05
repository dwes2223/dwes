<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pagina de chequeo de credenciales :</h1>
    <h2>Si has llegado aqui eres un heroe</h2>
    <?php
    if (isset($_GET['envio'])) {
        if (!empty($_GET['nombreusuario'])) {
            $usuario = $_GET['nombreusuario'];
            echo "<br>Usuario introducido : " . $usuario;
        } else {
            echo "<br><h3>No has introducido ningun usuario</h3>";
        }
        if (!empty($_GET['passwd'])) {
            $password = $_GET['passwd'];
            echo "<br>Contraseña introducido : " . $password;
        } else {
            echo "<br><h3>No has introducido ninguna contraseña</h3>";
        }
    }


    // Recogida valore checkbox
    if (isset($_GET['envio'])) {
        if (!empty($_GET['asignaturas'])) {
            $asignaturas = $_GET['asignaturas'];
            //foreach($asignaturas as $asignatura){
             //   echo "<br> Te encanta el leng programación : " . $asignatura;
            //}
            print_r($asignaturas);
        }else{
            echo "<br>No te gusta la programacion !";            
        }


    }//fin_isset

    // Recogida datos RadioButton
    if(isset($_GET["envio"])){
        $equipobasket = $_GET["equipo"];
        if(!empty($equipobasket)){
            echo "<br> Tu equipo de basket preferido es : " . $equipobasket;
        }else{
            echo "<br>No has elegido ningun equipo";
        }
    }

    //Recogida de listas desplegables
    if(isset($_GET["envio"])){
        $menupreferido = $_GET["menus"];
        if(!empty($menupreferido)){
            echo "<br> Tu plato preferido es : " . $menupreferido;
        }else{
            echo "<br>No has elegido ningun menu";
        }
    }

     //Recogida de listas desplegables multiples opciones
     if(isset($_GET["envio"])){
        $menupreferidos = $_GET["menusm"];        
        if(!empty($menupreferidos)){
            foreach($menupreferidos as $menu){
              echo "<br> Te encanta el plato : " . $menu;
            }
        }else{
            echo "<br>No has elegido ningun menu";
        }
    }

    
    ?>
</body>

</html>