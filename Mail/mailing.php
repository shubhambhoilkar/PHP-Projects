<!DOCTYPE html>
<html>
<head>
	<title>Mailing in PHP</title>
</head>
<body>
<?php
$to = "sambhoilkar@example.com";
$subject = "PHP Mail";
$message = "
<html>
<head>
<title>Test Mail</title>
</head>
<body>
<h1>Test Mail</h1>
<p>Hi Sam!</p>
</body>
</html>
";

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: shubhambhoilkar@gmail.com" . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "HTML Mail sent successfully.";
} else {
    echo "HTML Mail sending failed.";
}
?>

</body>
</html>