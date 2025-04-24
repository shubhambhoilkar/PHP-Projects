<!DOCTYPE html>
<html>
<body>

<h2>🔹 PHP XML Handling Examples</h2>

<?php
libxml_use_internal_errors(true);

// Keeping SimpleXML
echo "<h3>1. SimpleXML:</h3>";

$myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>Shubham Bhoilkar</user>
  <email>shubhambhoilkar@gmail.com</email>
  <country>India</country>
</document>";

$xml = simplexml_load_string($myXMLData);

if ($xml === false) {
    echo "SimpleXML Load Failed:<br>";
    foreach (libxml_get_errors() as $error) {
        echo $error->message . "<br>";
    }
} else {
    echo "User: " . $xml->user . "<br>";
    echo "Email: " . $xml->email . "<br>";
    echo "Country: " . $xml->country . "<br>";
}


// Using DOMDocument 
echo "<h3>2. DOMDocument:</h3>";

$dom = new DOMDocument();
$dom->loadXML($myXMLData);

if ($dom) {
    $users = $dom->getElementsByTagName("user");
    $emails = $dom->getElementsByTagName("email");
    $countries = $dom->getElementsByTagName("country");

    echo "User: " . $users->item(0)->nodeValue . "<br>";
    echo "Email: " . $emails->item(0)->nodeValue . "<br>";
    echo "Country: " . $countries->item(0)->nodeValue . "<br>";
} else {
    echo "DOMDocument failed to load XML.<br>";
}


// Using XMLReader
echo "<h3>3. XMLReader (Expat Parser):</h3>";

$reader = new XMLReader();
$reader->XML($myXMLData);

while ($reader->read()) {
    if ($reader->nodeType == XMLReader::ELEMENT && in_array($reader->name, ['user', 'email', 'country'])) {
        $name = $reader->name;
        $reader->read(); // move to text node
        if ($reader->nodeType == XMLReader::TEXT) {
            echo ucfirst($name) . ": " . $reader->value . "<br>";
        }
    }
}
$reader->close();
?>

</body>
</html>
