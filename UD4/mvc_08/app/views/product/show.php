<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del producto <?php echo $product->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $product->name ?></li>
            <li><strong>Tipo de Producto: </strong><?php echo $product->type->name ?></li>
            <li><strong>Precio: </strong><?php echo $product->price ?></li>
        </ul>
    </div>

  </main>
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>