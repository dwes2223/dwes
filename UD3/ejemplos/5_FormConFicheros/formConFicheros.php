<!--
Subida de ficheros:
  usar el atributo enctype="multipart/form-data" y el método POST
  para el fichero se usa la etiqueta <input type = "file">
--> 

<form action="procesar_subida.php" method="post" enctype="multipart/form-data">
    Escoja un fichero
    <input type="file" name="fichero">
    <input type="submit" value="subir fichero">
</form>
