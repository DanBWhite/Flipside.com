
<?php
 require_once 'includes/headerR.inc.php';
?>

    

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row"><!--/span-->

            
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Fox News</h2>
                    <div id="foxRss">Loading...</div>
            </div><!--/span-->
            

            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Drudge Report</h2>
              <div id="drudgeRss">Loading...</div>
            </div><!--/span-->


            <div class="col-6 col-sm-6 col-lg-4">
              <h2>The Blaze</h2>
              <div id="blazeRss">Loading...</div>
            </div><!--/span-->


            <div class="col-6 col-sm-6 col-lg-4">
              <h2>The WallStreet Journal</h2>
              <div id="wsjRss">Loading...</div>
            </div><!--/span-->


            <div class="col-6 col-sm-6 col-lg-4">
              <h2>New York Post</h2>
              <div id="nyPostRss">Loading...</div>
            </div><!--/span-->


          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="http://www.fox.com" class="list-group-item">Fox News</a>
            <a href="http://www.drudgereport.com" class="list-group-item">Drudge Report</a>
            <a href="http://www.theblaze.com" class="list-group-item">The Blaze</a>
            <a href="http://online.wsj.com/home-page" class="list-group-item">The Wall Street Journal</a>
            <a href="http://nypost.com" class="list-group-item">New York Post</a>
            
          </div>
        </div><!--/span-->
      </div>
      <p><!--/row--></p>
    

    </div><!--/.container-->

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
            <h4 class="modal-title" id="myModalLabel">Create an Account</h4>
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
    <!-- All Javascript at the bottom of the page for faster page loading -->
    
  <!-- First try for the online version of jQuery-->
  <script src="http://code.jquery.com/jquery.js"></script>

  <!-- Bootstrap JS -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Custom JS -->
  <script src="includes/js/script.js"></script>
  


<?php
  require_once 'includes/footer.inc.php';
?>

