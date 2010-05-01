<?php
  $index = $_GET['index'];

  if (isset($index)) {
    $index = intval($index);

    exec('ls dates/', $fs);

    unlink('dates/'.$fs[$index]);
  }

  header( 'Location: admin.php' ) ;
?>
