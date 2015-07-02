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

          <!--**************** LOAD CONTENT HERE *************-->
            
            <div id="container" > 

           <?php
          	require_once(ROOT_BASE . '/classes/class_breadcrumbs.php');
          	$bc = new breadcrumbs();
          	$bc->crumbs();
          	echo $bc->breadcrumbs;

          ?>


			<h4>Add new member</h4>
	
			
				<div class="panel panel-info" >
					<div class="panel-heading normal-font"><i class="fa fa-briefcase fa-fw"></i>&emsp;Member Settings</div>
					<div class="panel-body" style="background:#f7f7f7;">
						<div class="row">
							<div class="col-md-10" style="color:#456E6A; height:550px;"> 
								
								
							<!-- SHOW ERROR/SUCCESS MESSAGES -->
							<div id="successMsg" class="alert alert-success " style="display:none;"></div>
							<div id="errorMsg" class="alert alert-danger" style="display:none;" ></div>
							
						        <?php
						        	
						        	require ROOT_BASE .'/classes/class_form.php';

						        	  $gender = array(
						        	  	'- Select -' => 'select',
										    "Male" => 0,
										    "Female" => 1
										);

						        	  $marital_status = array(
						        	  		'- Select -' => 'select',
										    "Single" => 0,
										    "Married" => 1
										);

						        	  $title = array(
						     			'- Select -' => 'select',
						        	  	'Mr.'		 => "1",
						        	  	'Mrs.' 		 => "2",
						        	  	'Miss.' 	 => "3",
						        	  	'Dr.'   	 => "4",
						        	  	'Pastor.'	 => "5"
						        	  	 );

						        	  $ng1 ="ng";

						        	$fm = new multiStepForm();

							    	$fm->create_form('addMember', 'msform', ROOT_PATH . '/views/members/add/process.php');



							    	$fm->progress_bar('Personal', 'Media', 'Relatives');
						        	$fm->open_fieldset('level1');

							    	$fm->create_selectOption('title', 'label', 'Title:', $title);
							    	$fm->create_textField('firstname', 'text', 'firstname', 'First Name:', 'Placeholder', $val="");
							    	$fm->create_textField('middlename', 'text', 'middlename', 'Middle Name:','Placeholder', $val="");
							    	$fm->create_textField('lastname', 'text', 'lastname', 'Last Name:', 'Placeholder', $val="");
							    	$fm->create_dateField('dob', 'dob', 'Date of birth:', $val="");
							    	//$fm->create_textField('age', 'number', 'age', 'Age', $val="");

							    	//$fm->breakLine();

							    	$fm->create_selectOption('gender', 'label', 'Gender:', $title);							
							    	$fm->create_selectOption('marital_status', 'label', 'Marital status:', $title);

						

							    	$fm->create_textField('address', 'text', 'address', 'Address:', 'Placeholder', $val="");
							    	$fm->create_textField('district', 'text', 'district', 'District:', 'Placeholder', $val="");
							    	$fm->create_textField('cellphone', 'text', 'cellphone', 'Cellphone:', 'Placeholder', $val="");
							    	$fm->create_textField('email', 'text', 'email', 'Email:', 'Placeholder', $val="");
							    	$fm->create_textField('occupation', 'text', 'occupation', 'Occupation:', 'Placeholder', $val="");
							    	
							    	$fm->create_single_button('next', 'submit', 'button', 'Next');
							    	

							    	$fm->close_fieldset();
							    	$fm->open_fieldset('level2');

							    	// THE MIDDLE TERM REPRESENTS THE COLUMN WE ARE GETTING DATA FROM JSON FORMAT SOURCE
							    	$fm->create_selectOption('homecell', 'hcName', 'Homecell:', $title);
							    	$fm->create_selectOption('membership', 'msDescription', 'Memership:', $title);
							    	$fm->create_selectOption('locations', 'locationName', 'Location:', $title);
							    	$fm->create_selectOption('baptism', 'label',  'Baptism:', $title);
							    	$fm->create_textField('baptism_date', 'date', 'baptism_date', 'Baptism Date:', 'Placeholder', $val="");
							    	$fm->create_selectOption('sunday_class', 'className',  'Sunday Class:', $title);
							    	$fm->create_selectOption('channel', 'label',  'Channel used to know this church:', $title);
							    	$fm->create_selectOption('ministry', 'miniName',  'Ministry to participate:', $title);
							    	$fm->create_prev_button('previous', 'submit', 'button', 'Previous');
							    	$fm->create_next_button('next2', 'next2', 'button', 'Next');
 
							    	$fm->close_fieldset();
							    	$fm->open_fieldset('level3');

							    	$fm->add_dynamic_field($title);
							    	/*
							    	$fm->create_textField('family_member1', 'text', 'address', 'Family Member:', 'Placeholder', $val="");
							    	$fm->create_selectOption('relation1', 'text',  'Relationship:', $title);
							    	$fm->create_textField('family_member1', 'text', 'address', 'Family Member:', 'Placeholder', $val="");
							    	$fm->create_selectOption('relation1', 'text',  'Relationship:', $title);
							    	$fm->create_textField('family_member1', 'text', 'address', 'Family Member:', 'Placeholder', $val="");
							    	$fm->create_selectOption('relation1', 'text',  'Relationship:', $title);
							    	$fm->create_textField('family_member1', 'text', 'address', 'Family Member:', 'Placeholder', $val="");
							    	$fm->create_selectOption('relation1', 'text',  'Relationship:', $title);  	
							    	*/
							    	$fm->create_submit_button('submit_member', 'button', 'Previous');
							    	
							    	$fm->close_fieldset();
							    	
							    	$fm->close_form();
							    	
							    	echo $fm->formText;
							    	
						        ?>
					         
					        </div>
						     <br />
							</div>
						    
					    </div>
				  </div>
										  
				
		
			</div>
			<br>


            </div>

        <!-- ********************* END CONTENT ****************-->
         </div>

<?php include TEMPLATES . '/footer.php'; ?>
		<!--
		<ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol> -->
          
