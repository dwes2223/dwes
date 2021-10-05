<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EJercicio 5</title>
</head>

<body>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <input type="checkbox" name="nombre[]" value="Sergio"> Sergio <br>
        <input type="checkbox" name="nombre[]" value="Lucia"> Lucia <br>
        <input type="checkbox" name="nombre[]" value="Alejandro"> Alejandro <br>

        <input type="submit" value="enviar">
    </form>

    <?php



    foreach ($_POST['nombre'] as $nombres) {

        echo "Bienvenido $nombres <br>";
    }

    ?>

</body>

</html>