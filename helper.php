<?php
  foreach ($arrayFaq as $key => $value) { ?>
    <h2><?php print $value["domanda"];?> </h2>
    <p><?php print $value["risposta"];?></p><?php
  }
 ?>
