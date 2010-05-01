<?php
  $title = $_POST['title'];
  $date  = $_POST['date'];
  $time  = $_POST['time'];
  $venue = $_POST['venue'];
  $link  = $_POST['link'];

  if (isset($title)) {
    $data = $title.'|'.$date.'|'.$time.'|'.$title.'|'.$link;

    $n = str_replace(' ', '', system('ls -l dates/ | wc -l'));

    $file = fopen($n.'.txt', 'w');
		if ($file) {
      fwrite($file, $data);
      fclose($file);
    }
  }
?>
