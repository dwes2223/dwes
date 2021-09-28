<?php

$nombre = 'Pablo';
$direccion = 'Carlos Oriz Garcia';
$mail = 'gracia.pablo.smr@gmail.com';

$strHTML = '<table style="border: 2px black;">
                <tr>
                    <td>Nombre</td>
                    <td>Calle</td>
                    <td>Mail</td>
                </tr>
                <tr>
                    <td>' . $nombre . '</td>
                    <td>' . $direccion . '</td>
                    <td>' . $mail . '</td>
                </tr>
            </table>';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo 1 cambio web</title>
<style type="text/css" media="screen">
    table,th,td{
        border: 2px black solid;
        margin: 0;
        padding: 0;
    }
</style>
</head>
<body>
    <?php echo $strHTML;?>
</body>
</html>