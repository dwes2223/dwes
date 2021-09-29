<!--
    El protocolo HTTP define 8 verbos para establecer la comunicación cliente -servidor
        - GET se usa para solicitar una página web
            - Se pueden pasar parámetros al servidor en la URL
            - ?: indicador de que empieza la lista de parámetros
            - nompram1 = valor1 & nompram2 = valor2  
        - POST se usa para enviar formularios al servidor
            - Los parámetros no aparecen en la URL
-->

<!--
    Los formularios son la forma más habitual de enviar datos al servidor
        - Atributo action
            Especifica la ruta del script al que se enviará el formulario
        - Atributo method
            Especifica el método HTTP 
-->    
<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formularios</title>
</head><body>
    <h2>Nuestro primer formulario</h2>
    <form method="GET" action="17_FormularioAction.php">
        <label>Nombre</label><input type="text" value="" name="nombre"><br>
        <label>Apellidos</label><input type="text" value="" name="apellidos"><br>
        <input type="submit" value="enviar">
    </form>
</body></html>