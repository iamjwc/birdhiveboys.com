<?php
  $title = $_POST['title'];
  $date  = $_POST['date'];
  $time  = $_POST['time'];
  $venue = $_POST['venue'];
  $link  = $_POST['link'];

  if (isset($title)) {
    $data = $title.'|'.$date.'|'.$time.'|'.$venue.'|'.$link;

    $n = str_replace(' ', '', exec('date +%Y_%m_%d_%H_%M_%S_%N'));

    $file = fopen('dates/'.$n.'.txt', 'w');
		if ($file) {
      fwrite($file, $data);
      fclose($file);
    }
  }

  header( 'Location: admin.php' ) ;
?>
