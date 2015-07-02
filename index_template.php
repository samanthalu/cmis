<?php
  session_start();
  include ('inc/config.php');

  if(!isset($_SESSION['user_allowed']) || empty($_SESSION['user_allowed'])){
    header('location:login.php');

  }
?>

  <?php include TEMPLATES . '/header.php'; ?> 
  <?php include TEMPLATES . '/menu_bar.php'; ?>
  <?php include TEMPLATES . '/left_nav.php'; ?>

            
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <!--**************** LOAD CONTENT HERE *************-->
            
            <div id="container"> 

            </div>

        <!-- ********************* END CONTENT ****************-->
         </div>

<?php include TEMPLATES . '/footer.php'; ?>