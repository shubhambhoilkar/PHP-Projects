<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variable Handling.</title>
	<script>
	function validateForm() {
	var name = document.forms["myForm"]["name"].value;
	if (name == "") {
	alert("Name must be filled out!");
	return false;
	}
	return true;
	}
	</script>
</head>
<body>
	<h2>Variable Handling Example</h2>

	<form name="myForm" method="post" onsubmit="return validateForm()">
	Name: <input type="text" name="name"><br><br>
	Age: <input type="text" name="age"><br><br>
	<input type="submit" value="Submit">
	</form>

	<?php

	$name = $_POST['name'] ?? null;
	$age = $_POST['age'] ?? null;

	// Check if name is set
	if (isset($name)) {
		echo "Name is set: $name<br>";
	} else {
		echo "Name is not set.<br>";
	}

	// Check if name is empty
	if (empty($name)) {
		echo "Name is empty.<br>";
	} else {
		echo "Name is not empty.<br>";
	}

	// Check if age is set and is a number
	if (isset($age)) {
		echo "Age is set: $age<br>";
	} else {
		echo "Age is not set.<br>";
	}

	// Check the type of variable
	echo "The type of 'name' is: " . gettype($name) . "<br>";
	echo "The type of 'age' is: " . gettype($age) . "<br>";

	// Dump the variable info
	var_dump($name);
	var_dump($age);

	// Unset a variable (destroy it)
	unset($age);
	echo "After unset, the age variable is: ";

	// Check if $age is set before dumping
	if (isset($age)) {
		var_dump($age);
	} else {
		echo "Age is no longer set.";
	}
	?>


</body>
</html>
