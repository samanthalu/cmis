<?php
	$table = trim($_GET['table']);
	$column = trim($_GET['col']);
	//$conn = mysql_connect('localhost', 'root', 'damsel') or die('Failed to connect to database');
	//mysql_select_db('cmis') or die('Failed to select database');
	//$query =
	$data = array();
	// PDO CONNECTION to mysql
	include 'db.php';


	try{
		$conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
		//echo 'Connected to database';

		//$query = "SELECT  $column AS label, LOWER(REPLACE($column, ' ', '_')) as value from $table";

		$query = "SELECT $column AS label, @row_num := @row_num + 1 AS value FROM $table, (SELECT @row_num := 0) AS t";


		$data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
	

/*		
		foreach ($conn->query($query) as $row) {
			# code...
			//print $row[miniName] . "<br />";

			$data[] = $row; 
			print $row[miniID];
			
		} */

		echo json_encode($data);

	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>