<!-- Los enlaces pueden enviar información -->

<?php
    $lista = ["futbol", "baloncesto"];
    foreach ($lista as $id => $element) { ?>
    <li>
      <?= $element ?>     
      <a href="?method=ver&id=<?= $id ?>">Ver</a> -
      <a href="?method=borrar&id=<?= $id ?>">Borrar</a>
    </li>  
  <?php }