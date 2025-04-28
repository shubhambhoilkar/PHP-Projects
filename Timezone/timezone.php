<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TimeZone</title>
</head>
<body>
<?php
// Set the default timezone to Asia/Kolkata
date_default_timezone_set('Asia/Kolkata');

// Display the current time and date
echo "<h2>Current Date and Time in Asia/Kolkata</h2>";

echo "Today's date is: " . date("d-m-Y") . "<br>";
echo "Current time is: " . date("h:i:s A") . "<br>";
echo "Day of the week: " . date("l") . "<br>";

// Display full formatted date
echo "<br><strong>Full Date-Time:</strong> " . date("l, d F Y h:i:s A");
?>

</body>
</html>