<?php
  $email = $_POST['email'];
  $file_name = "emails.txt";

  if(isset($email)) {
    $f = fopen($file_name, 'a') or die("Email couldn't be saved.");
    fwrite($f, $email . "\n");
    fclose($f);
  }
?>

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

    td {
      width: 33%;
    }
  </style>
</head>
<body>
  <div id="main">
    <?php if(isset($email)) { ?>
      <div class="announcement" id="signed-up">
        <p><strong>Thanks for Signing Up!</strong> You are now on our email list as <strong><?php echo $email; ?></strong>.</p>
      </div>
    <?php } ?>
    <div class="announcement" id="big-news-2">
      <p><strong>Kicking off Saturday night of Bluegrass at Banjo Jims!</strong></p><p>Saturday, April 3<sup>rd</sup> @ 8pm at <a href="http://www.banjojims.com" target="_blank">Banjo Jims</a></p>
    </div>
    <div class="announcement" id="big-news-1">
      <p><strong>Hosting the Parkside Bluegrass Jam on behalf of Michael Daves</strong></p><p>Monday, April 5<sup>th</sup> @ 9:30pm at <a href="http://www.parksidelounge.net" target="_blank">the Parkside Lounge</a></p>
    </div>
    <div class="announcement" id="big-news">
      <p><strong>An Intimate Affair with The Birdhive Boys</strong></p><p>Sunday, April 18<sup>th</sup> @ 7pm at <a href="http://www.rockwoodmusichall.com" target="_blank">Rockwood Music Hall</a></p>
    </div>
    <div class="announcement" id="weekly">
      <p><strong>Weekly Residency</strong> Every Tuesday @ 7pm at <a href="http://thenationalunderground.com" target="_blank">the National Underground</a></p>
    </div>
    <div id="header">
      <h1>the <b>Birdhive Boys</b></h1>
    </div>
    <div id="content">
      <table>
        <tr valign="top">
          <td>
            <h2>Schedule</h2>
            <p>
              We play every Tuesday from 7pm to 11pm at <a target="_blank" href="http://thenationalunderground.com">the National Underground</a> 
              located at <a target="_blank" href="http://maps.google.com/maps?client=safari&rls=en&oe=UTF-8&um=1&ie=UTF-8&q=the+national+underground&fb=1&gl=us&hq=the+national+underground&hnear=New+York,+NY&cid=0,0,9013598530307897030&ei=kAhuS9K7Fcmo8Abb2N36BQ&sa=X&oi=local_result&ct=image&resnum=1&ved=0CAgQnwIwAA">159 E Houston St</a>.
            </p>
            <p>
              Kicking off night of Bluegrass at Banjo Jims on Saturday, April 3rd @ 8pm at <a href="http://www.banjojims.com" target="_blank">Banjo Jims</a>
            </p>
            <p>
              Hosting the Parkside Bluegrass Jam on behalf of Michael Daves, Monday, April 5th @ 9:30pm at <a href="http://www.parksidelounge.net" target="_blank">the Parkside Lounge</a>
            </p>
            <p>An Intimate Affair with The Birdhive Boys Sunday, April 18th @ 7pm at <a href="http://www.rockwoodmusichall.com" target="_blank">Rockwood Music Hall</a></p>
          </td>
          <td>
            <h2>Audio</h2>
            <p>
              We are currently working on recording an album. Until that is finished, we hope you'll enjoy these live clips. Check out our <a target="_blank" href="http://www.youtube.com/user/TheBirdhiveBoys">YouTube channel</a>!
            </p>
            <ul>
              <li><a target="_blank" href="http://www.youtube.com/watch?v=tfyoEI804Is" title="The Ballad of Jesse James at Chelsea Market">The Ballad of Jesse James</a></a>
              <li><a target="_blank" href="http://www.youtube.com/watch?v=CTwFtdz0DrE" title="Fox On The Run at Chelsea Market">Fox on the Run</a>
              <li><a target="_blank" href="http://www.youtube.com/watch?v=sGBo0ifEeKs" title="Carolina In The Pines at the National Underground">Carolina In The Pines</a>
              <li><a target="_blank" href="http://www.vimeo.com/10544875" title="Your Love Is Like A Flower at the Living Room">Your Love Is Like A Flower</a>
            </ul>
          </td>
          <td rowspan="2">
            <h2>Photos</h2>
            <p>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4159754157/" title="IMG_0484 by iamjwc, on Flickr"><img src="http://farm5.static.flickr.com/4040/4159754157_12aed482f2_s.jpg" width="75" height="75" alt="IMG_0484" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4160505924/" title="IMG_0480 by iamjwc, on Flickr"><img src="http://farm5.static.flickr.com/4040/4160505924_b163669efe_s.jpg" width="75" height="75" alt="IMG_0480" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4159749355/" title="IMG_0468 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2705/4159749355_9452c5e2f4_s.jpg" width="75" height="75" alt="IMG_0468" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4160501472/" title="IMG_0446 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2560/4160501472_27ddbb9a1a_s.jpg" width="75" height="75" alt="IMG_0446" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4159745243/" title="IMG_0445 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2667/4159745243_88de43fc82_s.jpg" width="75" height="75" alt="IMG_0445" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4160497708/" title="IMG_0430 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2685/4160497708_c7093a9ae1_s.jpg" width="75" height="75" alt="IMG_0430" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4160495660/" title="IMG_0424 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2556/4160495660_ba80f9f15d_s.jpg" width="75" height="75" alt="IMG_0424" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4159738795/" title="IMG_0412 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2549/4159738795_4df0163f50_s.jpg" width="75" height="75" alt="IMG_0412" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4160490334/" title="IMG_0404 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2534/4160490334_6a5ec7e423_s.jpg" width="75" height="75" alt="IMG_0404" /></a>
            <a target="_blank" href="http://www.flickr.com/photos/iamjwc/4160487592/" title="IMG_0400 by iamjwc, on Flickr"><img src="http://farm3.static.flickr.com/2576/4160487592_cf364de2e6_s.jpg" width="75" height="75" alt="IMG_0400" /></a>
            </p>
          </td>
        </tr>
        <tr valign="top">
          <td>
            <h2>Contact</h2>
            <p>
              If you'd like to hear about upcoming shows or other news from the boys,
              please sign up for the mailing list.
            </p>
            <form method="post">
              <label>Email: 
              <input type="email" name="email" placeholder="enter your email&hellip;" />
              </label>
              <input type="submit" value="sign up" />
            </form>
          </td>
          <td>
            <h2>The Boys</h2>
            <ul>
              <li><a target="_blank" href="http://www.myspace.com/bustedvacuum">Zack Bruce</a>: vocals, mandolin</li>
              <li>Sam Bruce: vocals, guitar</li>
              <li><a target="_blank" href="http://ellerymarshall.com/">Ellery Marshall</a>: banjo</li>
              <li>Justin Camerer: guitar</li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
    try {
      var pageTracker = _gat._getTracker("UA-12986686-1");
      pageTracker._trackPageview();
    } catch(err) {}
  </script>

</body>
</html>
