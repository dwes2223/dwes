<?php
// Url: http://mvc.local/mvc_00

require_once "Controller.php";
$app = new Controller();

if(isset($_GET['method'])) {
    $method = $_GET['method'];
} else {
    $method = 'index';
}

if(method_exists($app, $method)) {
    $app->$method();
} else {
    http_response_code(404);
    die("No encontrado");
}


