<?php
  session_start();
  include ($_SERVER['DOCUMENT_ROOT'] . '/inc/config.php');
  
  if(!isset($_SESSION['user_allowed']) || empty($_SESSION['user_allowed'])){
    header('location:'.ROOT_PATH.'/login.php');

  }
?>

  <?php include TEMPLATES . '/header.php'; ?> 
  <?php include TEMPLATES . '/menu_bar.php'; ?>
  <?php include TEMPLATES . '/left_nav.php'; ?>

  

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
            <div id="container">
                
            	<div class="container" style="width:100%; margin-left:0;">
	<h1 class="page-header">Members</h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info" >
					<div class="panel-heading normal-font"><i class="fa fa-briefcase fa-fw"></i>&emsp;Member Settings</div>
					 <!--  <div class="panel-body">
					    Now this is Sam Manthalu the great son of the east
					  </div>
						List group -->
					  <ul class="list-group" id="sysfont">
					   <a href="add/add_member.php" class="list-group-item ">&emsp;&emsp;<span style="color:#cc6600;"><i class="fa fa-asterisk fa-fw"></i></span>&emsp;Add new member</a>
					    <a href="#" class="list-group-item ">&emsp;&emsp;<i class="fa fa-edit fa-fw"></i>&emsp;Edit existing member information</a>
						  <a href="#" class="list-group-item ">&emsp;&emsp;<i class="fa fa-trash fa-fw"></i>&emsp;Delete member </a>
						  <a href="#" class="list-group-item ">&emsp;&emsp;<i class="fa fa-pencil fa-fw"></i>&emsp;Modify member status</a>
						 
					  </ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading normal-font"><i class="glyphicon glyphicon-th-list"></i>&emsp;Member Information</div>
					 <!--  <div class="panel-body">
					    Now this is Sam Manthalu the great son of the east
					  </div>
						List group -->
					  <ul class="list-group" id="sys-dft-font">
					   <a href="#list_members" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-file-text-o fa-fw"></i>&emsp;View member details</a>
					    <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-reorder fa-fw"></i>&emsp;View positions held</a>
						  <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-gift fa-fw"></i>&emsp;Family Information</a>
						  <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-info-circle fa-fw"></i>&emsp;Church status</a>
						 
					  </ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading normal-font"><i class="fa fa-book fa-fw"></i>&emsp;Reports</div>
					 <!--  <div class="panel-body">
					    Now this is Sam Manthalu the great son of the east
					  </div>
						List group -->
					  <ul class="list-group" id="sysfont">
					   <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-list-alt fa-fw"></i>&emsp;Members data report</a>
					    <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-file-text fa-fw"></i>&emsp;General Report</a>
						  <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-money fa-fw"></i>&emsp;Giving Report </a>
						  <a href="#" class="list-group-item normal-font">&emsp;&emsp;<i class="fa fa-users fa-fw"></i>&emsp;Marriage & death reports</a>
						 
					  </ul>
				</div>
			</div>
			</div>
		
			<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" >
					<div class="panel-heading normal-font"><i class="fa fa-briefcase fa-fw"></i>&emsp;Member Settings</div>
					<div class="panel-body">
					    Now this is Sam Manthalu the great son of the east
					  </div>
				</div>
			</div>
			</div>
		</div>
                
                
            </div>

         </div>

<?php include TEMPLATES . '/footer.php'; ?>

	