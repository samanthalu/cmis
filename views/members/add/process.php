<?php
	

	$errors         = array();  	// array to hold validation errors
	$data 			= array(); 		// array to pass back data
	$db_vars		= array();

	require 'validate.php';
	
	$title	  	= validateSelectOption($_REQUEST['title'], 'title');
	/*print_r($_POST['sunday_class']);
	echo "<br/>";*/
	$firstame 	= ($_REQUEST['firstname'] == "") ? $errors['firstname'] .= "Enter Firstname<br />" : validateText($_REQUEST['firstname'], 'Firstname');
	//$middlename = ($_REQUEST['middlename'] == "") ? "" : validateText($_REQUEST['middlename'], 'Middlename');
	$middlename = validateText($_REQUEST['middlename'], 'Middlename');
	$lastname 	= ($_REQUEST['lastname']  == "") ? $errors['lastname'] .= "Enter Lastname<br />" : validateText($_REQUEST['lastname'], 'Lastname');
	
	$dob = ($_REQUEST['dob'] == "") ? $errors['dob'] .= "Select date of birth<br />" : validateDate($_REQUEST['dob'], 'dob');

	$gender			= validateSelectOption($_REQUEST['gender'], 'gender');

	$marital_status = validateSelectOption($_REQUEST['marital_status'], 'marital status');
	
	//$dob = ($_REQUEST['dob'] == "") ? $errors['dob'] .= "Select date of birth<br />" : validateDate($_REQUEST['dob'], 'dob');
	


	//$age 		= ($_REQUEST['age'] == "") ? $errors['age'] .= "Enter age<br />" : validateNumber($_REQUEST['age'], 'Age');
	$address 	= ($_REQUEST['address'] == "") ? $errors['adress'] .= "Enter adress<br />" : validateMix($_REQUEST['address'], 'Address');
	$district 	= ($_REQUEST['district'] == "") ? $errors['district'] .= "Enter district<br />" : validateText($_REQUEST['district'], 'District');

	//$phone 		= validatePhone($_REQUEST['cellphone'], 'cellphone');
	array_push($db_vars, $_REQUEST['cellphone']);

	$email 		  = validateEmail($_REQUEST['email'], 'email');

	$occupation 	  = validateText($_REQUEST['occupation'], 'occupation');
	
	// the second column is the label to be displayed on error
	$homecell     = validateSelectOption($_REQUEST['homecell'], 'homecell');
	$membership	  = validateSelectOption($_REQUEST['membership'], 'membership');
	$locations	  = validateSelectOption($_REQUEST['locations'], 'location');
	
	$baptism	  = validateSelectOption($_REQUEST['baptism'], 'baptism');
	$baptism_date = ($_REQUEST['baptism_date'] == "") ? $errors['baptism_date'] .= "Select baptism date<br />" : validateDate($_REQUEST['baptism_date'], 'baptism date');
	
	$sunday_class = validateSelectOption($_REQUEST['sunday_class'], 'sunday class');
	
	$channel 	  = validateSelectOption($_REQUEST['channel'], 'channel');

	$ministry	  = validateSelectOption($_REQUEST['ministry'], 'ministry');
	//
	
		//print_r($db_vars);		
	//	}
	include 'db.php';

	// return a response ===========================================================

	// response if there are errors
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;

	} else {

			try{
			global $db_vars, $errors;

			$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS,
				array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			/*	$query = "INSERT INTO cmismembers (memberFistName, memberMiddleName, memberLastName, memberDOB, memberSex,
						memberMaritalStatus, memberAddress, memberDistrict, memberHomecellID, memberMembershipID, memberLocationID,
						memberBaptismID, memberPhone, memberEmail, memberOccupation, memberBaptsimDate, memberClassID, memberChannel,
						memberMinistryID) VALUES ()"; */

			$str = "INSERT INTO cmismember (memberTitle, memberFirstName, memberMiddleName, memberLastName, memberDOB, memberSex,
						memberMaritalStatus, memberAddress, memberDistrict, memberPhone, memberEmail, memberOccupation,  memberHomecellID, memberMembershipID, memberLocationID,
						memberBaptismID,  memberBaptismDate, memberClassID, memberChannel,
						memberMinistryID) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
			
			$query = $conn->prepare($str);
			$query->execute($db_vars);
			//echo $query->rowCount();
				
		}catch(PDOexception $e){
			$errors['db'] = $e->getMessage();
		}
		// if there are no errors, return a message
		$data['success'] = true;
		$data['message'] = 'Member has been successfully added!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);

	//CONNECT TO MYSQL FOR DATA SAVING
	

	//print_r($db_vars);
	//$conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('Error: '.mysql_error());


// validate the variables ======================================================
/*if (empty($_POST['firstname']))
		$errors['firstname'] = 'First name is required.';

	if (empty($_POST['lastname'])){
		$errors['lastname'] = 'Last name is required.';
	}

	if (empty($_POST['middlename'])){
		$errors['middlename'] = 'Middle name is required.';
	}
*/
	



