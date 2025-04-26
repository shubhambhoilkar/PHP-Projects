<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
echo "<h1>File System - Part 1: File Information & Path Operations</h1>";

// Create a sample file to work with
$sampleFile = "C:/xampp/htdocs/sam/PhpReference/FileSystem/sample.txt";
file_put_contents($sampleFile, "This is a sample file for file system operations.");

// 1. basename()
echo "<h2>1. basename()</h2>";
echo basename($sampleFile) . "<br>";

// 2. dirname()
echo "<h2>2. dirname()</h2>";
echo dirname($sampleFile) . "<br>";

// 3. pathinfo()
echo "<h2>3. pathinfo()</h2>";
print_r(pathinfo($sampleFile));

// 4. realpath()
echo "<h2>4. realpath()</h2>";
echo realpath($sampleFile) . "<br>";

// 5. realpath_cache_get()
echo "<h2>5. realpath_cache_get()</h2>";
print_r(realpath_cache_get());

// 6. realpath_cache_size()
echo "<h2>6. realpath_cache_size()</h2>";
echo realpath_cache_size() . "<br>";

// 7. file_exists()
echo "<h2>7. file_exists()</h2>";
echo file_exists($sampleFile) ? "File exists<br>" : "File does not exist<br>";

// 8. filetype()
echo "<h2>8. filetype()</h2>";
echo filetype($sampleFile) . "<br>";

// 9. filesize()
echo "<h2>9. filesize()</h2>";
echo filesize($sampleFile) . " bytes<br>";

// 10. fileatime()
echo "<h2>10. fileatime()</h2>";
echo date("F d Y H:i:s.", fileatime($sampleFile)) . "<br>";

// 11. filectime()
echo "<h2>11. filectime()</h2>";
echo date("F d Y H:i:s.", filectime($sampleFile)) . "<br>";

// 12. filemtime()
echo "<h2>12. filemtime()</h2>";
echo date("F d Y H:i:s.", filemtime($sampleFile)) . "<br>";

// 13. fileinode()
echo "<h2>13. fileinode()</h2>";
echo fileinode($sampleFile) . "<br>";

// 14. fileowner()
echo "<h2>14. fileowner()</h2>";
echo fileowner($sampleFile) . "<br>";

// 15. filegroup()
echo "<h2>15. filegroup()</h2>";
echo filegroup($sampleFile) . "<br>";

// 16. fileperms()
echo "<h2>16. fileperms()</h2>";
echo decoct(fileperms($sampleFile) & 0777) . "<br>";

// 17. stat()
echo "<h2>17. stat()</h2>";
print_r(stat($sampleFile));

// 18. lstat()
echo "<h2>18. lstat()</h2>";
print_r(lstat($sampleFile));
?>
</body>
</html>