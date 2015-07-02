<?php
  session_start();
  include ('inc/config.php');

?>

  <?php include TEMPLATES . '/header.php'; ?> 
  <?php include TEMPLATES . '/menu_bar.php'; ?>
  <?php include TEMPLATES . '/left_nav.php'; ?>

            
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <!--**************** LOAD CONTENT HERE *************-->
            
            <div id="container"> 

              <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>Now my name is Sam Manthalu. A lot of good friends know that I was born on the 
                  fourth day of the fourth month of the fourth year.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
              </div>

            </div>
        <!-- ********************* END CONTENT ****************-->
         </div>

<?php include TEMPLATES . '/footer.php'; ?>