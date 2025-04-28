<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Filtering variables</title>
	<script>
	// JavaScript function for validating the form before submission

	function validateForm() {
	var email = document.forms["myForm"]["email"].value;
    var ip = document.forms["myForm"]["ip"].value;

	var url = document.forms["myForm"]["url"].value;
	var age = document.forms["myForm"]["age"].value;

	// Validate Email
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if (!emailPattern.test(email)) {
	alert("Invalid Email Address!");
	return false;
	}

	// Validate IP Address (IPv4 or IPv6)
	var ipPattern = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
	if (!ipPattern.test(ip)) {
	alert("Invalid IP Address!");
	return false;
	}

	// Validate URL
	var urlPattern = /^(http|https):\/\/[^ "]+$/;
	if (!urlPattern.test(url)) {
	alert("Invalid URL! It should start with http:// or https://");
	return false;
	}

	// Validate Age
	if (isNaN(age) || age <= 0) {
	alert("Please enter a valid age greater than 0.");
	return false;
	}

	return true;  // If all inputs are valid, submit the form
	}
	</script>
</head>
<body>
	<h2>Enter Email and URL</h2>

	<form name="myForm" method="post" onsubmit="return validateForm()">
	Email: <input type="text" name="email"><br><br>
	URL: <input type="text" name="url"><br><br>
	IP Address: <input type="text" name="ip"><br><br>
	Age: <input type="text" name="age"><br><br>
	<input type="submit" value="Submit">
	</form>

	<?php
	// process.php

	$email = $_POST['email'] ?? '';
	$url = $_POST['url'] ?? '';
	$ip = $_POST['ip'] ?? '';
	$age = $_POST['age'] ?? '';

	// Validate Email
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Valid Email: $email<br>";
	} else {
	echo "Invalid Email<br>";
	}

	// Validate URL
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	echo "Valid URL: $url<br>";
	} else {
	echo "Invalid URL<br>";
	}

	// Validate IP Address
	if (filter_var($ip, FILTER_VALIDATE_IP)) {
	echo "Valid IP Address: $ip<br>";
	} else {
	echo "Invalid IP Address<br>";
	}

	// Validate Age (positive integer)
	if (filter_var($age, FILTER_VALIDATE_INT) && $age > 0) {
	echo "Valid Age: $age<br>";
	} else {
	echo "Invalid Age<br>";
	}
	?>


</body>
</html>