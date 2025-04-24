<!DOCTYPE html>
<html>
	<head>
		<title>
			insert ajax php
		</title>
	</head>
<body>
	<?php
	$conn = new mysqli("localhost", "root", "sam@96019202", "sam_database");
	$name = $_POST['name'];
	$conn->query("INSERT INTO users (name) VALUES ('$name')");
	echo "User '$name' added successfully!";
	?>
</body>
</html>