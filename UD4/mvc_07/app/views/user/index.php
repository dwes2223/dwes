<!doctype html>
<html lang="es">

<head>
  <?php require "../app/views/parts/head.php" ?>
</head>

<body>

  <?php require "../app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de usuarios</h1>
      <p>
      <a href="/user/create" class="btn btn-primary">Nuevo</a>
      <a href="/user/pdf" class="btn btn-primary">Pdf</a>        
      </p>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Email</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>

        <?php foreach ($users as $key => $user) { ?>
          <tr>
          <td><?php echo $user->name ?></td>
          <td><?php echo $user->surname ?></td>
          <td><?php echo $user->email ?></td>
          <td><?php echo $user->birthdate ? $user->birthdate->format('d-m-Y') : 'nonato' ?></td>
          <td>
            <a href="/user/show/<?php echo $user->id ?>" class="btn btn-primary">Ver </a>
            <a href="/user/edit/<?php echo $user->id ?>" class="btn btn-primary">Editar </a>
            <a href="/user/delete/<?php echo $user->id ?>" class="btn btn-primary">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "../app/views/parts/footer.php" ?>


</body>
<?php require "../app/views/parts/scripts.php" ?>

</html>