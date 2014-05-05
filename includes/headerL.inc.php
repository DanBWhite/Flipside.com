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

var cnn ="http://rss.cnn.com/rss/cnn_allpolitics.rss";
new GFdynamicFeedControl(cnn, "cnnRss");

var huff ="http://www.huffingtonpost.com/feeds/verticals/politics/index.xml";
new GFdynamicFeedControl(huff, "huffRss");

var nweek ="http://feeds.newsweek.com/newsweek/WorldNews";
new GFdynamicFeedControl(nweek, "nweekRss");

var pol ="http://www.politico.com/rss/politicopicks.xml";
new GFdynamicFeedControl(pol, "polRss");

var npr ="http://www.npr.org/rss/rss.php?id=1003";
new GFdynamicFeedControl(npr, "nprRss");


}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
  

   

  </head>

    <body>
     <!-- navbar -->
  <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    
    <div class="hope-left">
      <span class="flip-right">
        <span class="leftTxt"><a href="right.php">RightSide</span><img src="microele.png"></a>
      </span>
      <div class="logo_full">
            <div class="donk-logo">
            <img src="donkeylogo.png">
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
            <li><a href="left.php">News</a></li>
            <li><a href="leftliked.html">Trending</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li class="active"><a href="settings.php">Hello <?php echo $user->username; ?></a><li>
          </ul>

          <?php } else { ?>

          <ul class="nav navbar-nav">
            <li><a href="left.php">News</a></li>
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
