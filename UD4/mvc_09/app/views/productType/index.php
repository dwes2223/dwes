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
      <h1>Tipos  de Productos</h1>
      <p>
      <a href="<?= PATH."/productType/create" ?>" class="btn btn-primary">Crear</a>     
      </p>
     <table class="table table-striped table-hover">
     <tr>
        
        <th>Nombre</th>
        <th></th>
    </tr>
     <?php foreach($products as $key => $product){?>
        <tr>
            
            <td>  <?php echo $product->name;?>  </td>
            <td>
              <a href="<?= PATH."/productType/show/".$product->id ?>" class="btn btn-primary">Ver</a>
              <a href="<?= PATH."/productType/edit/".$product->id ?>" class="btn btn-primary">Modificar</a>
              <a href="<?= PATH."/productType/delete/".$product->id ?>" class="btn btn-primary">Borrar</a>
            </td> 
        </tr>
     <?php } ?>
     </table>
    </div>

  </main>
  <?php require "app/views/parts/footer.php" ?>

</body>
  <?php require "app/views/parts/scripts.php" ?>
</html>
