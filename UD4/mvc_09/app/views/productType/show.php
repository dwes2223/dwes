<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require "app/views/parts/head.php" ?>
</head>
<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle de Tipos de Productos</h1>
      <br/>
      <ul>
        <li><strong>Id: </strong><?php echo $productType->id ?></li>
        <li><strong>Nombre: </strong><?php echo $productType->name ?></li>
      </ul>
      <h2>Lista de Productos</h2>
      <ul>
        <?php
        if(!$productType->products)
        {
            echo "<li>No existe ningún producto.</li>";
        }
        foreach($productType->products as $key => $product)
        { ?>
            <li><?php echo $product->name ?></li>
        <?php } ?>
      </ul>
    </div>
  </main>
  <?php require "app/views/parts/footer.php" ?>
</body>
  <?php require "app/views/parts/scripts.php" ?>
</html>
