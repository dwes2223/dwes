<?php
// Abre la sesión
session_start();
$_SESSION = array();

//Eliminar la sesión
session_destroy();

//Eliminar la cookie
setcookie (session_name(), 123, time()-1000);

header ("Location: sesiones1_login.php");