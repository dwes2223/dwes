<?php
namespace Core;

/*
*   Todas las clases están contenidas en el namespace: App\Controllers
*   La clase App está contenida en el namespace Core
*   En la clase App los controladores son referidos a su namespace
*/

class App
{

    function __construct()
    {

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        // vamos a usar la url de la siguiente manera:
        //   controlador/metodo/argumentos

        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

        // echo "$url";
        // echo "<pre>";
        // var_dump($arguments);


        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }

        $controllerName = '\\App\\Controllers\\' . $controllerName;

        echo $controllerName;
        echo "<br>";
        // echo $method;
        // echo "<hr>";

        $controllerObject = new $controllerName;
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}
