
<?php
 require_once 'includes/headerL.inc.php';
?>

    

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row"><!--/span-->

            <div class="col-6 col-sm-6 col-lg-4">
              <h2>CNN</h2>
              <div id="cnnRss">Loading...</div>
            </div><!--/span-->
              

            <div class="col-6 col-sm-6 col-lg-4">
              <h2>The Huffington Post</h2>
              <div id="huffRss">Loading...</div>
            </div><!--/span-->


            <div class="col-6 col-sm-6 col-lg-4">
              <h2>NewsWeek</h2>
              <div id="nweekRss">Loading...</div>
            </div><!--/span-->


            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Politico</h2>
              <div id="polRss">Loading...</div>
            </div><!--/span-->


            <div class="col-6 col-sm-6 col-lg-4">
              <h2>NPR</h2>
              <div id="nprRss">Loading...</div>
            </div><!--/span-->


          </div><!--/row-->
        </div><!--/span-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="http://www.cnn.com" class="list-group-item active">CNN</a>
            <a href="http://www.huffingtonpost.com" class="list-group-item">Huffington Post</a>
            <a href="http://www.newsweek.com" class="list-group-item">Newsweek</a>
            <a href="www.npr.org" class="list-group-item">NPR</a>
            <a href="http://www.politico.com" class="list-group-item">Politico</a>
          </div>
        </div><!--/span-->
      </div>
    

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
