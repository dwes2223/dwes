<?php

/* Formulario de login
* si va bien abre la sesión, guarda el nombre de usuario y redirige a principal.php
* si va mal -> mensaje de error
*/
function comprobar_usuario ($nombre, $clave) {
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
			
		</form>
	</body>
</html>