<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XML Parser with Namespace Example</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: #007BFF; }
        textarea { width: 100%; height: 200px; margin-bottom: 10px; }
        input[type="submit"] { background: #28a745; border: none; padding: 10px 20px; color: white; border-radius: 5px; cursor: pointer; }
        .output { margin-top: 20px; padding: 15px; background: #f8f9fa; border: 1px solid #ccc; border-radius: 5px; }
        pre { background: #e9ecef; padding: 10px; border-radius: 5px; overflow-x: auto; }
    </style>
</head>
<body>
<div class="container">
    <h2>PHP XML Parser with Namespace Handling</h2>

    <form method="post">
        <label>Enter XML Data:</label>
        <textarea name="xml_data" placeholder="Example with Namespace:&#10;&#10;&lt;bookstore xmlns:bk='http://example.com/books'&gt;&#10;  &lt;bk:book&gt;&#10;    &lt;bk:title&gt;XML Basics&lt;/bk:title&gt;&#10;  &lt;/bk:book&gt;&#10;&lt;/bookstore&gt;"></textarea>
        <br>
        <input type="submit" value="Parse XML">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['xml_data'])) {
    $xmlData = $_POST['xml_data'];

    echo "<div class='output'>";
    echo "<h3>Parsing Results:</h3>";

    // Step 1: Create parser with namespace separator ':'
    $parser = xml_parser_create_ns("UTF-8");

    // Optional: Set options
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0); // Case-sensitive
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1); // Skip whitespace

    // Step 2: Set handlers
    xml_set_element_handler(
        $parser,
        function($parser, $name, $attrs) {
            echo "<p><strong>Start Element:</strong> " . htmlspecialchars($name) . "</p>";
            if (!empty($attrs)) {
                echo "<p>Attributes:</p><pre>";
                print_r($attrs);
                echo "</pre>";
            }
        },
        function($parser, $name) {
            echo "<p><strong>End Element:</strong> " . htmlspecialchars($name) . "</p>";
        }
    );

    xml_set_character_data_handler(
        $parser,
        function($parser, $data) {
            $data = trim($data);
            if ($data !== "") {
                echo "<p><strong>Character Data:</strong> " . htmlspecialchars($data) . "</p>";
            }
        }
    );

    xml_set_start_namespace_decl_handler(
        $parser,
        function($parser, $prefix, $uri) {
            echo "<p style='color:blue;'><strong>Namespace Start:</strong> Prefix = " . htmlspecialchars($prefix) . ", URI = " . htmlspecialchars($uri) . "</p>";
        }
    );

    xml_set_end_namespace_decl_handler(
        $parser,
        function($parser, $prefix) {
            echo "<p style='color:blue;'><strong>Namespace End:</strong> Prefix = " . htmlspecialchars($prefix) . "</p>";
        }
    );

    // Step 3: Parse the XML
    if (!xml_parse($parser, $xmlData, true)) {
        // Step 4: Handle errors
        $errorCode = xml_get_error_code($parser);
        $errorString = xml_error_string($errorCode);
        $line = xml_get_current_line_number($parser);
        $col = xml_get_current_column_number($parser);
        $byte = xml_get_current_byte_index($parser);

        echo "<p style='color:red'><strong>XML Error:</strong> $errorString at line $line, column $col (byte $byte)</p>";
    } else {
        echo "<p style='color:green'><strong>XML Parsed Successfully!</strong></p>";
    }

    // Step 5: Free the parser
    xml_parser_free($parser);

    echo "</div>";
}
?>
</div>
</body>
</html>
