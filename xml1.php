<!DOCTYPE html>
<html>
<body>

<?php
libxml_use_internal_errors(true);

$myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>Shubham Bhoilkar</user>
  <email>shubhambhoilkar@gmail.com</email>
  <country>India</country>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    echo "<h3>From XML String:</h3>";
    print_r($xml);
    echo "<br>";
}

echo "<br>Another way to load XML file:<br>";

$xml_2 = simplexml_load_file("c:/xampp/htdocs/PHP/demo1.xml") or die("Error: Cannot create object");

echo "<h3>From XML File:</h3>";
print_r($xml_2);
echo $xml_2;
print_r($xml_2);
?>

</body>
</html>
