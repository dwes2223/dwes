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
      <h1>Crear Tipos de Productos</h1>
      <form action="<?= PATH."/productType/store"?>" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Id</label>
            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="id" name="id">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name"  name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>

</body>
  <?php require "app/views/parts/scripts.php" ?>
</html>
