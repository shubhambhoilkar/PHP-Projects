<!DOCTYPE html>
<html>
<head>
	<title>Chechking and Listing</title>
</head>
<body>
	<?php
// List all available filters
print_r(filter_list());

// Get ID of a filter
echo "ID of FILTER_VALIDATE_EMAIL: " . filter_id("validate_email") . "<br>";

$username= "shubhambhoilkar";

// Check if POST variable 'username' exists
if (filter_has_var(INPUT_POST, $username)) {
    echo "Username found in POST data.";
} else {
    echo $username .": Username not found.";
}
?>

</body>
</html>