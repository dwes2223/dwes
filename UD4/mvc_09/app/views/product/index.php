<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de productos</h1>
      <p>
      <a href="<?= PATH."/product/create" ?>" class="btn btn-primary">Nuevo</a>      
      </p>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th></th>
        </tr>

        <?php foreach ($products as $key => $product) { ?>
          <tr>
          <td><?php echo $product->name ?></td>
          <td><?php echo $product->price ?></td>
          <td><?php echo $product->type->name ?></td>
          <td>
            <a href="<?= PATH."/product/show/".$product->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?= PATH."/product/edit/".$product->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?= PATH."/product/delete/".$product->id ?> ?>" class="btn btn-primary">Borrar </a>
            <a href="<?= PATH."/basket/add/".$product->id ?> ?>" class="btn btn-primary">Comprar</a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>

</body>
<?php require "app/views/parts/scripts.php" ?>

</html>