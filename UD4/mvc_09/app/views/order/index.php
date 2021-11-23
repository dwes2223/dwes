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
    <br/>
      <h1>Lista de Pedidos</h1>
      <br/>
     <table class="table table-striped table-hover">
     <tr>
        <th>Id</th>
        <th>Fecha de Compra</th>
        <th>Nombre de Comprador</th>
        <th>Detalles del Pedido</th>
    </tr>
     <?php foreach($orders as $key => $order){?>
        <tr>
            <td>  <?php echo $order->id;?>  </td>
            <td>  <?php echo date("d/m/Y",strtotime($order->date));?>  </td>   
            <td>  <?php echo $order->user->name ." ". $order->user->surname ;?>  </td>
            <td>
              <a href="<?= PATH."/order/show/".$order->id ?>" class="btn btn-primary">Ver</a>
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
