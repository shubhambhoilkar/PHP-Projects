<?php
// Sample input string from a form or source
$input_string = "Hello! My email is sambhoilkar@gmail.com . My phone number is 704519544.";

// Regular expression to match an email
$email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/";

// Match first email address
if (preg_match($email_pattern, $input_string, $matches)) {
    echo "Found email: " . $matches[0] . "<br>";
} else {
    echo "No email found.<br>";
}

// Regular expression to match phone numbers (simple format)
$phone_pattern = "/\d{3}-\d{3}-\d{4}/";

// Match all phone numbers
if (preg_match_all($phone_pattern, $input_string, $phone_matches)) {
    echo "Found phone numbers: " . implode(", ", $phone_matches[0]) . "<br>";
} else {
    echo "No phone numbers found.<br>";
}

// Regular expression to replace the email with a placeholder
$replaced_string = preg_replace($email_pattern, "[EMAIL_HIDDEN]", $input_string);
echo "Replaced string: $replaced_string<br>";

// Using preg_split to split the string by spaces
$split_string = preg_split("/\s+/", $input_string);
echo "Split string: " . implode(", ", $split_string) . "<br>";

// Example of preg_replace_callback - anonymizing phone numbers
$callback_replaced = preg_replace_callback($phone_pattern, function($matches) {
    return "XXX-XXX-XXXX";  // Replace with a generic placeholder
}, $input_string);

echo "Phone anonymized: $callback_replaced<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions in PHP</title>
</head>
<body>
    <h2>PHP Regular Expression Example</h2>

    <form method="POST">
        <label for="user_input">Enter a string:</label><br>
        <input type="text" id="user_input" name="user_input" value=""><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_input = $_POST['user_input'];

        // Match and validate email from user input
        if (preg_match($email_pattern, $user_input, $matches)) {
            echo "Valid email found: " . $matches[0] . "<br>";
        } else {
            echo "No valid email found.<br>";
        }

        // Replace any emails with a placeholder
        $input_without_email = preg_replace($email_pattern, "[EMAIL_REDACTED]", $user_input);
        echo "Input with email redacted: " . $input_without_email . "<br>";
    }
    ?>

</body>
</html>
