<?php 
  session_start();
  $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.css">

    <style type="text/css">
    	/*CHANGING STYLE FOR PANEL SUCCESS*/
    	.btn-primary {
    		background-color: #484848;
    	}

		.panel-primary {
		  border-color: #484848
		}
		.panel-primary > .panel-heading {
		  color: #ccc;
		  background-color: #484848;
		  border-color: #484848;
		}
		.panel-primary > .panel-heading + .panel-collapse .panel-body {
		  border-top-color: #d6e9c6;
		}
		.panel-primary > .panel-footer + .panel-collapse .panel-body {
		  border-bottom-color: #d6e9c6;
		}

		.alert-success{
			background-color: #999;
			color: #ddd;
		}

    .well-sm{
      color: #ff3300;
      background-color: #ddd;
      text-align: center;
    }

    </style>


    </head>
    <body>
    <div id="wrapper">
    <div class="alert alert-success">
     
              <center>Welcome to Church Management Information System. Please, enter your username and password to proceed.</center>
    </div>
    	
    	<div class="row" style=" margin-left:auto; margin-right:auto; margin-top:10%;">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"> <?php echo date('l\, jS \of F Y h:i:s A');?></h3>
              </div>
              <div class="panel-body" style="margin:auto;">
              <br>
                <?php

                ?>
                <div id="container" style=""> 

                
                  <?php

                      $error = "";
                      //validate form and get status message
                      if(isset($_POST['login'])){
                        //print_r($_POST);
                        $username = trim(addslashes(($_POST['username'])));
                        $password = trim(addslashes(($_POST['password'])));

                        if($username=='' || $password=='') $error="Enter username and password";

                        $conn = mysql_connect('localhost','root', 'damsel') or die('Connection error');
                        mysql_select_db('cmis') or die('Could not select database');

                        $query = "SELECT * FROM cmisUsers WHERE username='".$username."' 
                        AND password=password('".$password."')";

                        //print_r($query);
                        $result = mysql_query($query) or die('Error in query: '.mysql_error());
                        if(mysql_num_rows($result) > 0){
                          $row = mysql_fetch_row($result);

                          $_SESSION['user_allowed'] = "true";
                          $_SESSION['user'] = $row->username;
                          $_SESSION['user_status'] = $row->status;
                          
                          header('location:index.php');
                        }else{
                          if($error==""){
                            $error = "Incorrect username or password";
                          }
                        
                        }
                        
                        echo "<div class=\"well well-sm\">";
                        echo $error;
                        echo "</div>";
                      
                      }
                  ?>
           
                <!-- FORM STARTS HERE -->
              	<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
				  

				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-at fa-fw"></i></span>
					  <input class="form-control" type="text" placeholder="Username" size="10" name="username" value="<?=$_POST['username'];?>">
					</div>
					<br>
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
					  <input class="form-control" type="password" placeholder="Password" name="password">
					</div>

					<br>

					 <div class="form-group">
				        <div class="col-xs-offset-2 col-xs-10">
				            <!-- <button type="submit" class="btn btn-primary" onclick="" ="validate()">Login</button> -->
                    <input type="submit" class="btn btn-primary" onclick="validate();" value="Login" name="login">
				        </div>
				    </div>


				</form>
				</div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

    </div>
 </body>
</html>