<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php require "app/views/parts/head.php" ?>
</head>
<body>

  <?php require "app/views/parts/header.php" ?>

  <h1>Detalle del Tipos de Productos</h1>

    <form action="<?= PATH."/productType/update"?>" method="post">
      <input type="hidden" name="id" value="<?php echo $productType->id ?>">
        <div class="form-group">
            <label for="formGroupExampleInput" >Name</label>
            <input type="text" value="<?php echo $productType->name ?>" class="form-control" id="formGroupExampleInput" name="name">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php require "app/views/parts/footer.php" ?>


</body>
  <?php require "app/views/parts/scripts.php" ?>
</html>
