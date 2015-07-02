<?php
	include ('db.php');
	require_once('validate.php');
	$messages = array();
	$db_vars = array();
	$errors = array();
	//get action from the controller
	$tag = trim(addslashes($_GET['tag']));
	

	switch ($tag) {
		case 'add_homecell': add_homecell();
			# code...
			break;

		case 'edit_homecell': edit_homecell();
		# code...
		break;

		case 'list_homecell': list_homecell();
		# code...
		break;

		case 'delete_homecell': delete_homecell();
		# code...
		break;	
	}


	/*
		Function for adding a home cell
		Not sure yet what happens after a successful add
		
	*/

	function add_homecell(){
		global $info, $errors, $messages;
		$data = json_decode(file_get_contents("php://input"));
		$hc_name = $data->hc_name;
		$desc	 = $data->description;

		//VALIDATE
		
		$lastname 	= ($hc_name  == "") ? $errors['homecell_name'] .= "Enter Homecell name<br />" : validateText($hc_name, 'Homecell Name');
		$desc= validateMix($desc, 'Description');

		if (!empty($errors)) {
			$messages['success'] = false;
			$messages['errors']  = $errors;

			# code...
		}else{


			try{
				global $db_vars, $errors;

				$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS,
					array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

				

				$str = "INSERT INTO cmishomecell (hcName, hcDescription) VALUES (?, ?)"; 
				
				$query = $conn->prepare($str);
				$query->execute($db_vars);
				//echo $query->rowCount();
				
		}catch(PDOexception $e){
			$errors['db'] = $e->getMessage();
		}
		// if there are no errors, return a message
		$messages['success'] = true;
		$messages['message'] = 'Homecell has been successfully added!';
	}

	// return all our data to an AJAX call
	echo json_encode($messages);

		
	}

	function list_homecell() {

		$data = array();
		global $info, $errors, $messages;

		try{

			$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS,
					array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			$query = "SELECT * FROM cmishomecell";
			$data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($data);

		}catch(PDOexception $e){
			$errors['db'] = $e->getMessage();
		}

	}
?>