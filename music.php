<!DOCTYPE html>
<html>
<head>
<title>Renars Dreimanis</title>

<meta charset="utf-8">
<meta name="author" content="Renars Dreimanis" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style1.css">
<script type="text/javascript" src="time.js"></script>
<style>
button {
    border: none;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 4px;
    cursor: pointer;
}
</style>
</head>

<body id="body1">
<div class="header" id="grad1">
  <h1>Music TV</h1>
</div>
<ul>
  <li><a href="http://renars-dreimanis.id.lv"><img src="home-solid.svg" alt="Home" height="20" width="20"></a></li>
  <li><a href="gallery.php">Galerija</a></li>
  <li><a class="active" href="music.php">Music TV</a></li>
  <li><a href="shemas.php">Elektronika</a></li>
  <li><a href="links.php">Noderīgas saites</a></li>
  <li><a href="contact.php">Kontakti</a></li>
  <li><a href="about.php">Par mani</a></li>
</ul>
<div class="row">
  <div class="column side">
    <h2></h2>
    <p></p>
  </div>
  <div class="column middle">
    <h2></h2>
    <div class="cont group"><iframe id="music-tv" width="480" height="270" src="https://www.youtube.com/embed/videoseries?list=PLviuILcgtnhLIi6RMBbLpZX5zDZdIJReD&amp;enablejsapi=1;disablekb=1;fs=0;iv_load_policy=3;controls=0;autoplay=0;showinfo=0" frameborder="0" style="border: solid 10px #37474F" encrypted-media allowfullscreen></iframe>
    <script type="text/javascript">
    <!--
  var tag = document.createElement('script');
  tag.id = 'iframe-demo';
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('music-tv', {
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
    });
  }
  function onPlayerReady(event) {
    document.getElementById('music-tv').style.borderColor = '#FF6D00';
  }
  function changeBorderColor(playerStatus) {
    var color;
    if (playerStatus == -1) {
      color = "#37474F"; // unstarted = gray
    } else if (playerStatus == 0) {
      color = "#FFFF00"; // ended = yellow
    } else if (playerStatus == 1) {
      color = "#33691E"; // playing = green
    } else if (playerStatus == 2) {
      color = "#DD2C00"; // paused = red
    } else if (playerStatus == 3) {
      color = "#AA00FF"; // buffering = purple
    } else if (playerStatus == 5) {
      color = "#FF6DOO"; // video cued = orange
    }
    if (color) {
      document.getElementById('music-tv').style.borderColor = color;
      document.getElementById('btnPlay').style.color = color;
    }
var element = document.getElementById("id01");
element.innerHTML ="Player Status="+(playerStatus);

setTimeout(
    function () {
        
    
if (playerStatus == 1 || playerStatus == 3 || playerStatus == -1) {

document.getElementById("body1").style.backgroundColor="#000000";
document.getElementById("btnPlay").style.backgroundColor="#787878";
document.getElementById("btnStop").style.backgroundColor="#787878";
document.getElementById("btnStop").style.color="#bb0000";
document.getElementById("id01").style.color="#1a6600";
document.getElementById("id02").style.color="#000000";
// document.getElementById("foo").style.backgroundColor="#0d0d0d";
document.getElementById("body1").style.WebkitTransition = "all 3s"; // Code for Safari 3.1 to 6.0
document.getElementById("body1").style.transition = "all 3s";       // Standard syntax
// document.getElementById("foo").style.WebkitTransition = "all 3s"; // Code for Safari 3.1 to 6.0
// document.getElementById("foo").style.transition = "all 3s";       // Standard syntax
// document.getElementById("copy1").style.color="#595959";
}
else
     {

document.getElementById("body1").style.backgroundColor="#ffff99";
document.getElementById('btnStop').style.color="#37474F";
document.getElementById("id01").style.color="#000000";
document.getElementById("id02").style.color="#000000";
// document.getElementById("foo").style.backgroundColor="#f2f2f2";
// document.getElementById("copy1").style.color="#000000";
}
}, 1000);
  }
  function onPlayerStateChange(event) {
    changeBorderColor(event.data);
  }
  -->
</script>
<noscript>Your browser does not support JavaScript!</noscript>
<br>
  <button type="button" id="btnPlay" onclick="player.playVideo();"><i class="fas fa-play"></i></button>
  <button type="button" id="btnStop" onclick="player.stopVideo();"><i class="fas fa-stop"></i></button>

<br>
<br>
<p id="id02" style="text-shadow: 0 0 20px #99ff33;"><a href="https://www.youtube.com/playlist?list=PLviuILcgtnhLIi6RMBbLpZX5zDZdIJReD">Symphonic Metal </a>(playlist on YouTube)</p>
<p id="id01">Player Status=&hellip;</p>
<br>
<br>
</div>
    
</div>
  <div class="column side">
    <h2></h2>
    <p></p>
  </div>
</div>



<div class="footer" id="foo">
  <p>Copyright &copy; 2013-2019 Renars Dreimanis</p>
</div>

</body>
</html>