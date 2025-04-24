<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<p>Hello Sam!</p>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "sam@96019202";
	$dbname = "sam_database";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO user_details (user_id, name, surname, phone, job_role, salary)
	VALUES (9,'Shubham','Bhoilkar',7045019544,'AI Developer',900000)";

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>
	</body>
</html>