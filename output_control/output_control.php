<?php
// Starting output buffering
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output Contorlling</title>
	<script>
        // This JavaScript will trigger a page reload to see the output after buffer manipulation
        function reloadPage() {
            window.location.reload();
        }
    </script>
</head>
<body>
	<?php
	// Let's use the output buffer to capture content first
	echo "This content is being buffered by PHP.<br>";

	// Check buffer status
	if (ob_get_level() > 0) {
    $status = ob_get_status();
    echo "<p>Status of Buffer: " . ($status['active'] ? "Active" : "Inactive") . "</p>";
} else {
    echo "<p>No active output buffer found.</p>";
}

	// Get the contents of the buffer
	$content = ob_get_contents();
	echo "<h3>Buffer Contents:</h3><pre>$content</pre>";

	// Flush the buffer (send to browser and clear it)
	ob_flush();
	echo "<p>Buffer flushed to the browser.</p>";

	// Check if the buffer is now empty
	if (ob_get_length() === 0) {
	    echo "<p>Buffer is now empty after flush.</p>";
	}

	// Now let's clean the buffer (remove content but don't send it)
	ob_clean();
	echo "<p>This content was cleaned from the buffer and will not be sent.</p>";

	// Add content again to demonstrate further functions
	ob_start(); // Restart output buffering
	echo "This new content is now in a fresh buffer.<br>";

	// Get the content and flush it
	$newContent = ob_get_contents();
	echo "<h3>New Buffer Contents:</h3><pre>$newContent</pre>";
	ob_end_flush(); // End buffering and flush the content

	?>

	<!-- Button to trigger the page reload -->
	
	<button onclick="reloadPage()">Reload the page and check the output after buffer operations</button>

</body>
</html>