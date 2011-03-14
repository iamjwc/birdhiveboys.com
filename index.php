<?php
  $email = $_POST['email'];
  $file_name = "emails.txt";

  if (isset($email)) {
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

  
  <link href="http://www.jplayer.org/latest/skin/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="jplayer/jquery.jplayer.js"></script>
  <script>
  $(function() {
    var Playlist = function(instance, playlist, options) {
      var self = this;
  
      this.instance = instance; // String: To associate specific HTML with this playlist
      this.playlist = playlist; // Array of Objects: The playlist
      this.options = options; // Object: The jPlayer constructor options for this playlist
  
      this.current = 0;
  
      this.cssId = {
        jPlayer: "jquery_jplayer_",
        interface: "jp_interface_",
        playlist: "jp_playlist_"
      };
      this.cssSelector = {};
  
      $.each(this.cssId, function(entity, id) {
        self.cssSelector[entity] = "#" + id + self.instance;
      });
  
      if(!this.options.cssSelectorAncestor) {
        this.options.cssSelectorAncestor = this.cssSelector.interface;
      }
  
      $(this.cssSelector.jPlayer).jPlayer(this.options);
  
      $(this.cssSelector.interface + " .jp-previous").click(function() {
        self.playlistPrev();
        $(this).blur();
        return false;
      });
  
      $(this.cssSelector.interface + " .jp-next").click(function() {
        self.playlistNext();
        $(this).blur();
        return false;
      });
    };
  
    Playlist.prototype = {
      displayPlaylist: function() {
        var self = this;
        $(this.cssSelector.playlist + " ul").empty();
        for (i=0; i < this.playlist.length; i++) {
          var listItem = (i === this.playlist.length-1) ? "<li class='jp-playlist-last'>" : "<li>";
          listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "_item_" + i +"' tabindex='1'>"+ this.playlist[i].name +"</a>";
  
          // Create links to free media
          if(this.playlist[i].free) {
            var first = true;
            listItem += "<div class='jp-free-media'>(";
            $.each(this.playlist[i], function(property,value) {
              if($.jPlayer.prototype.format[property]) { // Check property is a media format.
                if(first) {
                  first = false;
                } else {
                  listItem += " | ";
                }
                listItem += "<a id='" + self.cssId.playlist + self.instance + "_item_" + i + "_" + property + "' href='" + value + "' tabindex='1'>" + property + "</a>";
              }
            });
            listItem += ")</span>";
          }
  
          listItem += "</li>";
  
          // Associate playlist items with their media
          $(this.cssSelector.playlist + " ul").append(listItem);
          $(this.cssSelector.playlist + "_item_" + i).data("index", i).click(function() {
            var index = $(this).data("index");
            if(self.current !== index) {
              self.playlistChange(index);
            } else {
              $(self.cssSelector.jPlayer).jPlayer("play");
            }
            $(this).blur();
            return false;
          });
  
          // Disable free media links to force access via right click
          if(this.playlist[i].free) {
            $.each(this.playlist[i], function(property,value) {
              if($.jPlayer.prototype.format[property]) { // Check property is a media format.
                $(self.cssSelector.playlist + "_item_" + i + "_" + property).data("index", i).click(function() {
                  var index = $(this).data("index");
                  $(self.cssSelector.playlist + "_item_" + index).click();
                  $(this).blur();
                  return false;
                });
              }
            });
          }
        }
      },
      playlistInit: function(autoplay) {
        if(autoplay) {
          this.playlistChange(this.current);
        } else {
          this.playlistConfig(this.current);
        }
      },
      playlistConfig: function(index) {
        $(this.cssSelector.playlist + "_item_" + this.current).removeClass("jp-playlist-current").parent().removeClass("jp-playlist-current");
        $(this.cssSelector.playlist + "_item_" + index).addClass("jp-playlist-current").parent().addClass("jp-playlist-current");
        this.current = index;
        $(this.cssSelector.jPlayer).jPlayer("setMedia", this.playlist[this.current]);
      },
      playlistChange: function(index) {
        this.playlistConfig(index);
        $(this.cssSelector.jPlayer).jPlayer("play");
      },
      playlistNext: function() {
        var index = (this.current + 1 < this.playlist.length) ? this.current + 1 : 0;
        this.playlistChange(index);
      },
      playlistPrev: function() {
        var index = (this.current - 1 >= 0) ? this.current - 1 : this.playlist.length - 1;
        this.playlistChange(index);
      }
    };
  
    var audioPlaylist = new Playlist("2", [
      {
        name:"Honest Man",
        mp3: "http://birdhiveboys.com/thebirdhiveboys/thecornlady/honestman.mp3"
      },
      {
        name:"Honey, You Don't Know My Mind",
        mp3: "http://birdhiveboys.com/thebirdhiveboys/thecornlady/honey.mp3"
      },
      {
        name:"Use Me Like You Used To",
        mp3: "http://birdhiveboys.com/thebirdhiveboys/thecornlady/useme.mp3"
      },
      {
        free: true,
        name:"Mirror On The Wall",
        mp3: "http://birdhiveboys.com/thebirdhiveboys/thecornlady/mirror.mp3"
      }
  
    ], {
      ready: function() {
        audioPlaylist.displayPlaylist();
        audioPlaylist.playlistInit(false); // Parameter is a boolean for autoplay.
      },
      ended: function() {
        audioPlaylist.playlistNext();
      },
      play: function() {
        $(this).jPlayer("pauseOthers");
      },
      swfPath: "../js",
      supplied: "mp3"
    });
    

  })
  </script>
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
        $i = $i + 1;

        echo "<div class='announcement $class'>";
        echo "  <p><strong>$title</strong> <span>$date @ $time at <a href='$link' target='_blank'>$venue</a></span></p>";
        echo "</div>";
      }
    ?>

    <div class="announcement" id="weekly">
      <p><strong>Monthly Residency</strong> <span>First Tuesday of Every Month @ 8pm at <a href="http://thenationalunderground.com" target="_blank">the National Underground</a></span></p>
    </div>

    <div id="header">
      <h1>the <b>Birdhive Boys</b></h1>
    </div>
    <div id="content">
      <table>
        <tr valign="top">
          <td rowspan="2" width="66%">
            <h2>The Corn Lady</h2>
            <div class="the-corn-lady">
              <p>
                Our first EP consists of three original tracks and one of our favorite standards.
                Please have a listen and let us know what you think.
              </p>

              <div id="jquery_jplayer_2" class="jp-jplayer"></div>
          
              <div class="jp-audio">
                <div class="jp-type-playlist">
                  <div id="jp_interface_2" class="jp-interface">
                    <ul class="jp-controls">
                      <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                      <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                      <li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
                      <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                      <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                      <li><a href="#" class="jp-previous" tabindex="1">previous</a></li>
                      <li><a href="#" class="jp-next" tabindex="1">next</a></li>
                    </ul>
                    <div class="jp-progress">
                      <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                      </div>
                    </div>
                    <div class="jp-volume-bar">
                      <div class="jp-volume-bar-value"></div>
                    </div>
                    <div class="jp-current-time"></div>
                    <div class="jp-duration"></div>
                  </div>
                  <div id="jp_playlist_2" class="jp-playlist">
                    <ul>
                      <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                      <li></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <br/>
          </td>
          <td width="33%">
            <h2>The Boys</h2>
            <ul>
              <li><a target="_blank" href="http://www.myspace.com/bustedvacuum">Zack Bruce</a>: vocals, mandolin</li>
              <li>Sam Bruce: vocals, guitar</li>
              <li><a target="_blank" href="http://ellerymarshall.com/">Ellery Marshall</a>: banjo</li>
              <li>Justin Camerer: guitar</li>
              <li><a target="_blank" href="http://maxjohnsonmusic.com/live/">Max Johnson</a>: bass</li>
            </ul>
          </td>
        </tr>
        <tr valign="top">
          <td width="33%">
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
