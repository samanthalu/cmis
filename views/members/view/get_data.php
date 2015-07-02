<?php
	include 'db.php';
	$data = array();

	try{
		$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
		$query = "SELECT * FROM cmismember";
		$data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);

	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>