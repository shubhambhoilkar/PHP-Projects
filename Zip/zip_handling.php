<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zip Handling.</title>
</head>
<body>
<?php
echo "<h2>PHP ZIP Handling Example</h2>";

// 1. Open a zip file
$zip_file = "C:/xampp/htdocs/sam/PhpReference/Exception.zip"; // Make sure this file exists in your folder
$zip = zip_open($zip_file);

if (is_resource($zip)) {
    echo "<h3>ZIP Archive Opened Successfully!</h3>";

    // 2. Read entries inside the zip
    while ($zip_entry = zip_read($zip)) {
        echo "<hr>";
        echo "<strong>File inside ZIP:</strong><br>";

        // 3. Get name of the entry
        echo "Name: " . zip_entry_name($zip_entry) . "<br>";

        // 4. Get uncompressed size
        echo "Uncompressed Size: " . zip_entry_filesize($zip_entry) . " bytes<br>";

        // 5. Get compressed size
        echo "Compressed Size: " . zip_entry_compressedsize($zip_entry) . " bytes<br>";

        // 6. Get compression method
        echo "Compression Method: " . zip_entry_compressionmethod($zip_entry) . "<br>";

        // 7. Open zip entry
        if (zip_entry_open($zip, $zip_entry)) {
            // 8. Read contents of the zip entry
            $content = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
            echo "Content: <pre>$content</pre>";

            // 9. Close zip entry
            zip_entry_close($zip_entry);
        }
    }

    // 10. Close the zip archive
    zip_close($zip);
} else {
    echo "<h3>Failed to open ZIP file!</h3>";
}
?>

</body>
</html>