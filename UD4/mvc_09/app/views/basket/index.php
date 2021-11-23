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
    <br/>
      <h1>Lista de Productos</h1>
      <br/>
     <table class="table table-striped table-hover">
     <tr>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </tr>
     <?php 
        if(isset($products)) {
          foreach($products as $key => $product){ ?>
            <tr>
              <td>  <?php echo $product->name;?>  </td>   
              <td> 
                  <a href="<?= PATH."/basket/down/".$product->id ?>" class="btn btn-primary">-</a><?php echo " ".$product->cantidad." ";?>
                  <a href="<?= PATH."/basket/up/".$product->id ?>" class="btn btn-primary">+</a>
              </td>
              <td>  <?php echo ($product->price)*($product->cantidad);?>  </td>
            </tr>
      <?php } 
        } else {
            echo "<tr>";
            echo "<td>No hay productos en la cesta.</td>";
            echo "</tr>";
        } ?>
          <tr>
              <td>
                <a class="btn btn-primary" href="<?= PATH."/basket/store/"?>">Guardar</a>
              </td>
          </tr>
     </table>
     <p>
     <?php echo $_SESSION['message'] ?>
     </p>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
  <?php require "app/views/parts/scripts.php" ?>
</html>
