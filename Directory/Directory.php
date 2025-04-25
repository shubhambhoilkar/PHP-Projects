<!DOCTYPE html>
<html>
<head>
    <title>PHP Directory Functions</title>
</head>
<body>
    <h1>PHP Directory Functions Example</h1>

    <?php
    // Set a sample directory (current directory)
    $directory = __DIR__; // Safer way to get current directory

    echo "<h2>1. getcwd() - Current Directory Path</h2>";
    echo "Current Directory: " . getcwd() . "<br>";

    echo "<h2>2. chdir() - Change Directory</h2>";
    chdir($directory);
    echo "Changed to Directory: " . getcwd() . "<br>";

    echo "<h2>3. scandir() - List Files and Folders</h2>";
    $files = scandir($directory);
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li>$file</li>";
    }
    echo "</ul>";

    echo "<h2>4. opendir(), readdir(), rewinddir(), closedir()</h2>";
    if ($handle = opendir($directory)) {
        echo "<ul>";
        while (false !== ($entry = readdir($handle))) {
            echo "<li>$entry</li>";
        }
        echo "</ul>";

        rewinddir($handle);
        echo "<h3>After rewinddir()</h3>";
        echo "<ul>";
        while (false !== ($entry = readdir($handle))) {
            echo "<li>$entry</li>";
        }
        echo "</ul>";

        closedir($handle);
    } else {
        echo "Unable to open directory.";
    }

    echo "<h2>5. dir() - Using dir() Class</h2>";
    $d = dir($directory);
    echo "Handle: " . $d->handle . "<br>";
    echo "Path: " . $d->path . "<br>";
    echo "<ul>";
    while (false !== ($entry = $d->read())) {
        echo "<li>$entry</li>";
    }
    echo "</ul>";
    $d->close();

    echo "<h2>6. chroot() - Change Root Directory</h2>";
    echo "<p><b>Note:</b> chroot() requires root/administrator privileges and will not work on a normal webserver or local XAMPP/WAMP. Skipping for safety.</p>";
    // Example (disabled)
    // chroot("/path/to/new/root");
    ?>

</body>
</html>
