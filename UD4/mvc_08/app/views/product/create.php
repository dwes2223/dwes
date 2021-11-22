<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Alta de producto</h1>

    <form method="post" action="<?= PATH."/product/store"?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="Tipo de Producto">Tipo de Producto</label>
        <select  class="custom-select" name="type_id">
          <?php
          foreach($productsTypes  as $key => $product){?>
            <option value="<? echo $product->id ?>"><?php echo $product->name?></option>
          ?>
          <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>