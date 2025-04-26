<!DOCTYPE html>
<html>
<head>	<title></title>
</head>
<body>
	<?php 
	$string ="{'Shubham':9,'Sam':9601;'Suyash':99}";
	echo "Decoding: " .$string;
	echo "<br>Error: ";

	switch (json_last_error()){
		case JSON_ERROR_NONE:
		echo "No errors.";
		break;

		case JSON_ERROR_DEPTH:
		echo "Maximum stack depth exceeded";
		break;

		case JSON_ERROR_STATE_MISMATCH:
		echo "Invalid or malformed JSON";
		break;

		case JSON_ERROR_CTRL_CHAR:
		echo "Control chracter error.";
		break;

		case JSON_ERROR_UTF8:
		echo "Malformed UTF-8 characters";
		break;

		default:
		echo "Unknown error";
		break;
	}
	?>
</body>
</html>