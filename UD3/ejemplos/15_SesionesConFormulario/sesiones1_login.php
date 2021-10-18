<?php

/* Formulario de login
* 	-> datos correctos: sesiones1_principal.php
*/
function comprobar_usuario ($nombre, $clave) {
	//Simula la base de datos, admite dos usuarios: login y password
	if ( $nombre == "usuario" and $clave == "1234") {
		$usu['nombre'] = "usuario";
		$usu['rol'] = 0;
		return $usu;
	} elseif ( $nombre == "admin" and $clave== "1234") {
		$usu['nombre'] = "admin";
		$usu['rol'] = 1;
		return $usu;
	} else {
		return FALSE;
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$usu = comprobar_usuario ($_POST['usuario'], $_POST['clave']);
	if ( $usu == FALSE) {
		$err = TRUE;
		$usuario = $_POST['usuario'];
	} else {
		// Si el login es correcto crea un sesión
		// Almacena en la variable usuario el nombre del usuario
		session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
		header ("Location: sesiones1_principal.php");
	}
}
?>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
	</head>
	<body>
		<?php if (isset($_GET["redirigido"])) {
			echo "<p>Haga login para continuar</p>";
		} 
		if (isset($err) and $err == true) {
			echo "<p>Revise usuario y contraseña</p>";
		} ?>
		
		<form method = "POST" action = "">
			Usuario
			<input value = "<?php if (isset($usuario)) echo $usuario ?>" id = "usuario" name = "usuario" type = "text">
			Clave
			<input id = "clave" name = "clave" type = "password">
			<input type = "submit">
		</form>
	</body>
</html>