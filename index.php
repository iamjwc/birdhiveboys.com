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
      background-color: #000;
    }

    #header {
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

    #content {
      border-bottom: 2px solid #444;
      border-top: 2px solid #444;
    }

		#content p {
			line-height: 1.4em;
		}

    td {
      width: 33%;
    }
  </style>
</head>
<body>
  <div id="main">
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
          </td>
          <td>
            <h2>Audio</h2>
            <p>
              We are currently working on recording an album. Until that
              is finished, we hope you'll enjoy these live clips.
            </p>
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
</body>
</html>
