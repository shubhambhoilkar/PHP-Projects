<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

// 1. json_encode()
echo "<h2>1. json_encode()</h2>";
$data = ["name" => "Sam", "age" => 25, "city" => "Navi Mumbai"];
$json = json_encode($data);
echo $json . "<br><br>";

// 2. json_decode()
echo "<h2>2. json_decode()</h2>";
$jsonString = '{"name":"Sam","age":25,"city":"Navi Mumbai"}';
$array = json_decode($jsonString, true);
print_r($array);
echo "<br><br>";

// 3. json_last_error() and json_last_error_msg()
echo "<h2>3. json_last_error() and json_last_error_msg()</h2>";
$brokenJson = '{"name":"Sam","age":25'; // broken JSON
json_decode($brokenJson);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Error: " . json_last_error_msg() . "<br><br>";
}

// 4. JSON constants examples
echo "<h2>4. JSON constants examples</h2>";

// JSON_PRETTY_PRINT
echo "<h3>JSON_PRETTY_PRINT</h3>";
$prettyJson = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$prettyJson</pre><br>";

// JSON_FORCE_OBJECT
echo "<h3>JSON_FORCE_OBJECT</h3>";
$arrayData = ["apple", "banana", "cherry"];
$jsonObject = json_encode($arrayData, JSON_FORCE_OBJECT);
echo $jsonObject . "<br><br>";

// JSON_NUMERIC_CHECK
echo "<h3>JSON_NUMERIC_CHECK</h3>";
$numericData = ["item1" => "123", "item2" => "456"];
echo json_encode($numericData, JSON_NUMERIC_CHECK) . "<br><br>";

// JSON_UNESCAPED_SLASHES
echo "<h3>JSON_UNESCAPED_SLASHES</h3>";
$urlData = ["website" => "https://www.w3schools.com"];
echo json_encode($urlData, JSON_UNESCAPED_SLASHES) . "<br><br>";

// JSON_THROW_ON_ERROR (Example with try-catch)
echo "<h3>JSON_THROW_ON_ERROR</h3>";
try {
    $broken = '{"name":"Sam","age":25';
    json_decode($broken, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>

</body>
</html>