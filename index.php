<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>FlipSide</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">


  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">

              <h2 class="masthead-brand"></h2>
              <ul class="nav masthead-nav">
                <li><a href="right.php">RightSide</a></li>
                <li><a href="left.php">LeftSide</a></li>
                <li class = "active"><a href="#"
                   data-toggle="modal"
                   data-target="#loginModal">Login</a></li>
                <li><a href="#"
                   data-toggle="modal"
                   data-target="#registerModal">Register</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <div class="coverLeft" onclick= "javascript:location.href='left.php'">
                <img src="donkey.png" alt="Liberal"> 
              </div>

              <div class="coverRight" onclick=  'javascript:location.href="right.php"'>
                <img src="elephant.png" alt="Conservative">
              </div>

            <h1 class="cover-heading">FlipSide</h1>
            <p class="lead">Select your political side.</p>
          </div>

          <div class="mastfoot">
            <div class="inner">
            </div>
          </div>

        </div>

      </div>

    </div>

           <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Create an Account</h4>
            </div>
            <div class="modal-body">
                <?php require_once 'register.php';?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

       <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Log In</h4>
            </div>
            <div class="modal-body">
                <?php require_once 'login.php';?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>

  <!-- First try for the online version of jQuery-->
  <script src="http://code.jquery.com/jquery.js"></script>

  <!-- Bootstrap JS -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Custom JS -->
  <script src="includes/js/script.js"></script>
  </body>
</html>
