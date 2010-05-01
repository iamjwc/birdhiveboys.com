<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<html>
<head>
  <title>The Birdhive Boys: Modern City Boys, Old Timey Music</title>
  <style>
    body {
      color: #fff;
      background: url("images/bg-bw.png");
      font-family: Georgia;
      font-size: 13px;
    }

    #main {
      margin: 0 auto;
      width: 800px;
      padding: 20px;
      padding-top: 15px;
      background-color: #000;
    }

    #header {
      margin-top: 5px;
      position: relative;
      border-top: 2px solid #444;
      height: 325px;
      background-image: url("images/header.jpg");
    }

    #header h1 {
      font-size: 35px;
      font-weight: normal;
      position: absolute;
      bottom: -19px;
      left: 15px;
    }
    h2 {
      font-weight: normal;
      font-size: 15px;
    }

    a {
      color: #fff;
    }
    a:hover {
      text-decoration: none;
    }

    img {
      border-width: 0;
    }

    #content {
      border-bottom: 2px solid #444;
      border-top: 2px solid #444;
    }

    #content p, #content ul {
      line-height: 1.4em;
    }

    .announcement {
      margin: 0;
      margin-bottom: 5px;
      padding: 7px;
      font-size: 20px;
      text-align: center;
    }
    .announcement p {
      margin: 0;
      padding: 0;
    }
    .announcement p span {
      white-space: nowrap;
    }

    #big-news-2 {
      background-color: #A0BDFF;
      color: #000;
    }
    #big-news-2 a {
      color: #000;
    }
    #big-news-1 a {
      color: #000;
    }
    #big-news-1 {
      background-color: #98b7b2;
      color: #000;
    }
    #big-news a {
      color: #000;
    }
    #big-news {
      background-color: #91cb91;
      color: #000;
    }
    #weekly a {
      color: #000;
    }
    #weekly {
      background-color: #6e95b2;
      color: #000;
    }
    #signed-up {
      background-color: #fffb86;
      color: #000;
    }
    .odd a {
      color: #000;
    }
    .odd {
      background-color: #98b7b2;
      color: #000;
    }
    .even a {
      color: #000;
    }
    .even {
      background-color: #91cb91;
      color: #000;
    }

    td {
      width: 33%;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" />
  <script>
    function updateAnnouncement() {
      var title = $('input[name=title]').val();
      var date  = $('input[name=date]').val();
      var time  = $('input[name=time]').val();
      var venue = $('input[name=venue]').val();
      var link  = $('input[name=link]').val();

      var html = '<p><strong>' + title + '</strong> <span>' + date + ' @ ' + time + ' at <a href="' + link + '" target="_blank">' + venue + '</a></span></p>';
      $('div#example').html(html);
    }

    $(function() {
      $('input').keyup(function() {
        updateAnnouncement();
      });

      setInterval(updateAnnouncement, 1000);
    });
  </script>
</head>
<body>
  <div id="main">
    <form action="write-file.php" method="POST">
      <table>
        <tr>
          <td><label for="title">Title:</label></td>
          <td><input name="title" /></td>
        </tr>
        <tr>
          <td><label for="date">Date:</label></td>
          <td><input name="date" /></td>
        </tr>
        <tr>
          <td><label for="time">Time:</label></td>
          <td><input name="time" /></td>
        </tr>
        <tr>
          <td><label for="venue">Venue:</label></td>
          <td><input name="venue" /></td>
        </tr>
        <tr>
          <td><label for="link">Link:</label></td>
          <td><input name="link" /></td>
        </tr>
      </table>
      <input type="submit" />
    </form>

    <h2>Preview</h2>

    <div class="announcement" id="example">
      <p><strong></strong> @ at <a href="" target="_blank"></a></p>
    </div>

    <hr />

    <h2>Remove Dates</h2>

    <?php
      exec('ls dates/', $fs);

      $i = 0;
      foreach ($fs as $f) {
        $filename = 'dates/'.$f;
        $file = fopen($filename, 'r');
        $data = fread($file, filesize($filename));

        list($title, $date, $time, $venue, $link) = explode('|', $data);

        if ($i % 2 == 0) {
          $class = "odd";
        } else {
          $class = "even";
        }

        echo "<div class='announcement $class'>";
        echo "  <p><strong>$title</strong> <span>$date @ $time at <a href='$link' target='_blank'>$venue</a></span></p>";
        echo "  <p><a class='delete' href='remove-file.php?index=$i'>Delete this.</a></p>";
        echo "</div>";

        $i = $i + 1;
      }
    ?>
  </div>
</body>
</html>
