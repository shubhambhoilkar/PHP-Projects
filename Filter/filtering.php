<!DOCTYPE html>
<html>
<head>
	<title>Filtering</title>
</head>
<body>
	<form  method="get">
	Email: <input type="email" name="email"><br><br>
	Age: <input type="text" name="age"><br><br>
	<input type="submit" value="Submit">
	</form>

	<?php
	// Assume some GET data like ?email=test@example.com&age=20
	$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
	$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

	if ($email) {
	    echo "Valid Email: $email<br>";
	} else {
	    echo "Invalid Email<br>";
	}

	if ($age) {
	    echo "Valid Age: $age";
	} else {
	    echo "Invalid Age";
	}
	?>

</body>
</html>