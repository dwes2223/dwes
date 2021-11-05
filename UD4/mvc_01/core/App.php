<?php

/*
* Inconveniente de la arquitectura anterior:
*   -> Si hay múltiples recursos o tablas tendremos múltiples controladores
*   -> Cada uno de ellos supone un punto de entrada a la aplicación
*
* Front Controller: entrada única
*   Esta entrada única permite filtrar cualquier petición
*   
* ¿Qué es Front Controller?
*   - Clase que recibe todas las peticiones
*   - De acuerdo a la ruta recibida puede cargar un controlador u otro y ejecutar el método necesario 
*   -> Se encarga del ENRUTAMIENTO
*   -> Enrutamiento USER FRIENDLY -> evitar los parámetros GET
*       parámetros GET: localhost/index.php?controller=user$method=index
*       misma información con rutas amigables: localhost/users
*
*   Rutas amigables:
*       Nosotros escribiremos: http://mvc.local/user/show
*       Apache interpretará: http://mvc.local/index.php?url=user/show
* 
*   -> Necesitamos que Apache tenga activo el módulo rewrite
*/
class App
{
    /*
    * Controlador frontal
    *   Lleva el control de la aplicación de acuerdo a la ruta recibida
    *   Carga un controlador de acuerdo a la ruta y después ejecuta uno de sus métodos
    *   Esquema que usaremos: /controlador/metodo/argumento1/argumento2
    *   Ejemplo: La ruta /user/index
    *              -> Carga el controlador UserController
    *              -> Ejecuta su método index()
    *
    *   Además, tomaremos un controlador y método por defecto:
    *         -> Si no existe controlador tomamos uno por defecto, por ejemplo home
    *         -> Si no existe método tomamos uno por defecto, por ejemplo index
    */ 

    function __construct()
    {
        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        // vamos a usar la url de la siguiente manera:
        // controlador/metodo/argumentos

        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

        // echo "Url: $url <br>";
        // echo "<pre>";
        // var_dump($arguments);

        // echo "Controlador: $controllerName";
        // echo "<br>";
        // echo $method;
        // echo "<hr>";
        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }
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

