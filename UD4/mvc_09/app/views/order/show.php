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
      <h1>Detalle del Pedido</h1>
      <table class="table table-striped table-hover">
     <tr>
        <th>ID Producto</th>
        <th>Precio por Unidad</th>
        <th>Cantidad</th>
    </tr>
     <?php 
     foreach($products as $key => $product){?>
        <tr>
            <td><?php echo $product->product_id;?></td>
            <td><?php echo $product->price;?></td>   
            <td><?php echo $product->quantity ;?></td>
        </tr>
     <?php } ?>
     </table>
    </div>
  </main>
  <?php require "app/views/parts/footer.php" ?>

</body>
  <?php require "app/views/parts/scripts.php" ?>
</html>
