<?php
 require_once 'includes/global.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>The Flip Side</title>
    <!-- Font Link -->
    <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

  <link rel='stylesheet' media='screen and (max-width: 700px)' href='narrow.css' />
  <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='narrow.css' />
  <link rel='stylesheet' media='screen and (min-width: 901px)' href='flipside.css' />
  




<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");


</style>
<script type="text/javascript">
function load() {

var fox ="http://feeds.foxnews.com/foxnews/politics";
new GFdynamicFeedControl(fox, "foxRss");

var drudge ="http://feeds.feedburner.com/DrudgeReportFeed";
new GFdynamicFeedControl(drudge, "drudgeRss");

var blaze ="http://www.theblaze.com/stories/feed/";
new GFdynamicFeedControl(blaze, "blazeRss");

var wsj ="http://online.wsj.com/xml/rss/3_7087.xml";
new GFdynamicFeedControl(wsj, "wsjRss");

var nyPost ="http://nypost.com/news/feed/";
new GFdynamicFeedControl(nyPost, "nyPostRss");


}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
  

   

  </head>

  <body>
     <!-- navbar -->
  <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    
    <div class="hope-left">
      <span class="flip-left">
        <span class="leftTxt"><a href="left.php">LeftSide</span><img src="minidonkey.png"></a>
      </span>
      <div class="logo_full">
            <div class="ele-logo">
            <img src="miniElephant.png">
            </div>
            
            <a class="navbar-brand" href="#">Flip Side</a>
            
      </div>
    </div>
    
    <div class="container">   
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>


        <div class="collapse navbar-collapse">
          <?php if(isset($_SESSION['logged_in'])) {
                $user = unserialize($_SESSION['user']); ?>
            
          <ul class="nav navbar-nav">
            <li><a href="right.php">News</a></li>
            <li><a href="rightliked.html">Trending</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li class="active"><a href="settings.php">Hello <?php echo $user->username; ?></a><li>
          </ul>

          <?php } else { ?>

          <ul class="nav navbar-nav">
            <li><a href="right.php">News</a></li>
            <li><a href="rightliked.html">Trending</a></li>
            <li><a href="#"
               data-toggle="modal"
               data-target="#loginModal">Login</a></li>
            <li><a href="#"
               data-toggle="modal"
               data-target="#registerModal">Register</a></li>
          </ul>


          

          <?php } ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->
