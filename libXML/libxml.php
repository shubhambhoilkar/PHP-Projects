<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Comprehensive Guide to LibXML Functions and Constants in PHP for XML Parsing, Error Handling, and Security</h2>
<?php

// Enable internal error handling
libxml_use_internal_errors(true);

// Disable external entity loading for security purposes
libxml_disable_entity_loader(true);

// Example XML string with some intentional errors
$xmlString = <<<XML
<root>
    <name>PHP XML Example</name>
    <description>Example for LibXML functions</description>
    <item>Item 1</item>
    <item>Item 2</item>
    <error>This is an unclosed tag</root>
XML;

// Try to load the XML and handle errors
$xml = simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_NSCLEAN);

if ($xml === false) {
    // If XML parsing failed, display the errors
    echo "Failed loading XML:\n";
    $errors = libxml_get_errors();  // Get all errors
    foreach ($errors as $error) {
        echo "Error: " . $error->message . " at line " . $error->line . "\n";
    }
    libxml_clear_errors();  // Clear the error buffer after processing
} else {
    // If parsing succeeded, print the XML data
    echo "XML Loaded successfully\n";
    echo "Name: " . $xml->name . "\n";
    echo "Description: " . $xml->description . "\n";
}

// Example of using libxml_set_streams_context
$context = stream_context_create(['http' => ['timeout' => 5]]);
libxml_set_streams_context($context);  // Set context for external entity loading

// Load another XML with a custom context
$externalXML = <<<XML
<root>
    <name>External Entity Example</name>
    <external>Data from external entity</external>
</root>
XML;

$externalParsed = simplexml_load_string($externalXML, 'SimpleXMLElement', LIBXML_NOERROR | LIBXML_NOCDATA);
if ($externalParsed !== false) {
    echo "External XML Loaded Successfully: " . $externalParsed->name . "\n";
}

// Example of enabling external entity loading with a custom loader function
libxml_set_external_entity_loader(function ($url, $public, $context) {
    return file_get_contents($url);
});

// Example of handling huge XML (if we had a large XML string, this would be set)
$hugeXML = "<root>" . str_repeat("<item>Huge Data</item>", 100000) . "</root>";
$hugeXmlParsed = simplexml_load_string($hugeXML, 'SimpleXMLElement', LIBXML_PARSEHUGE);
if ($hugeXmlParsed !== false) {
    echo "Huge XML Loaded Successfully.\n";
}

?>

</body>
</html>