<!DOCTYPE html>
<html>
<head>
	<title>File Meta Info</title>
</head>
<body>
<?php
echo "<h1>File System - Part 4: File Information and Meta Functions</h1>";

file_put_contents("info_test.txt", "Meta info content");

// 1. file_exists()
echo "<h2>1. file_exists()</h2>";
echo file_exists("info_test.txt") ? "File exists<br>" : "File does not exist<br>";

// 2. filesize()
echo "<h2>2. filesize()</h2>";
echo "File size: " . filesize("Sample.txt") . " bytes<br>";

// 3. filetype()
echo "<h2>3. filetype()</h2>";
echo "File type: " . filetype("Sample.txt") . "<br>";

// 4. filectime()
echo "<h2>4. filectime()</h2>";
echo "Created: " . date("Y-m-d H:i:s", filectime("Sample.txt")) . "<br>";

// 5. filemtime()
echo "<h2>5. filemtime()</h2>";
echo "Modified: " . date("Y-m-d H:i:s", filemtime("Sample.txt")) . "<br>";

// 6. fileatime()
echo "<h2>6. fileatime()</h2>";
echo "Last accessed: " . date("Y-m-d H:i:s", fileatime("Sample.txt")) . "<br>";

// 7. fileperms()
echo "<h2>7. fileperms()</h2>";
echo "Permissions: " . substr(sprintf('%o', fileperms("Sample.txt")), -4) . "<br>";

// 8. fileowner()
echo "<h2>8. fileowner()</h2>";
echo "Owner ID: " . fileowner("Sample.txt") . "<br>";

// 9. filegroup()
echo "<h2>9. filegroup()</h2>";
echo "Group ID: " . filegroup("Sample.txt") . "<br>";

// 10. fileinode()
echo "<h2>10. fileinode()</h2>";
echo "Inode: " . fileinode("Sample.txt") . "<br>";

// 11. pathinfo()
echo "<h2>11. pathinfo()</h2>";
$info = pathinfo("Sample.txt");
echo "Dir: {$info['dirname']}<br>";
echo "Base: {$info['basename']}<br>";
echo "Ext: {$info['extension']}<br>";
echo "File: {$info['filename']}<br>";

// 12. dirname()
echo "<h2>12. dirname()</h2>";
echo "Directory name: " . dirname("Sample.txt") . "<br>";

// 13. basename()
echo "<h2>13. basename()</h2>";
echo "File name: " . basename("Sample.txt") . "<br>";

// 14. stat()
echo "<h2>14. stat()</h2>";
print_r(stat("Sample.txt"));

// 15. lstat()
echo "<h2>15. lstat()</h2>";
echo "<pre>";
print_r(lstat("Sample.txt"));
echo "</pre>";

// 16. clearstatcache()
echo "<h2>16. clearstatcache()</h2>";
clearstatcache();
echo "Cache cleared<br>";
?>

</body>
</html>