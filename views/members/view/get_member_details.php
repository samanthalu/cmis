<?php
	include 'db.php';
	$memberID = $_REQUEST['memberID'];
	$data = array();
	echo $memberID;
	try{
		$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
		$query = "SELECT * FROM cmismember"; // WHERE memberID = $memberID";
		$data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
		//echo json_encode($data);
		echo "Samanthalu";

	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>