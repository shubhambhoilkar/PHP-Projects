<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
echo "<h1>File System - Part 2: File Reading and Writing</h1>";

// Create and write to a sample file
$sampleFile = "C:/xampp/htdocs/sam/PhpReference/FileSystem/sample.txt";
file_put_contents($sampleFile, "Line 1\nLine 2\nLine 3\n");

// 1. fopen()
echo "<h2>1. fopen()</h2>";
$handle = fopen($sampleFile, "r");
echo $handle ? "File opened successfully<br>" : "Failed to open file<br>";

// 2. fread()
echo "<h2>2. fread()</h2>";
rewind($handle);
echo fread($handle, filesize($sampleFile)) . "<br>";

// 3. fwrite()
echo "<h2>3. fwrite()</h2>";
$handleWrite = fopen($sampleFile, "a");
fwrite($handleWrite, "Appended line\n");
fclose($handleWrite);

// 4. fclose()
echo "<h2>4. fclose()</h2>";
fclose($handle);
echo "File closed<br>";

// 5. fgets()
echo "<h2>5. fgets()</h2>";
$handle = fopen($sampleFile, "r");
echo fgets($handle) . "<br>";
fclose($handle);

// 6. fgetc()
echo "<h2>6. fgetc()</h2>";
$handle = fopen($sampleFile, "r");
echo fgetc($handle) . "<br>";
fclose($handle);

// 7. fgetcsv()
echo "<h2>7. fgetcsv()</h2>";
file_put_contents("csv_sample.csv", "name,age\nJohn,30\nJane,25");
$csv = fopen("csv_sample.csv", "r");
while (($line = fgetcsv($csv)) !== FALSE) {
    print_r($line);
    echo "<br>";
}
fclose($csv);

/*
// 8. fgetss()
echo "<h2>8. fgetss()</h2>";
file_put_contents("html_sample.txt", "<b>Bold</b> and <i>Italic</i>");
$handle = fopen("html_sample.txt", "r");
echo fgetss($handle) . "<br>";
fclose($handle);
*/

// 9. file()
echo "<h2>9. file()</h2>";
print_r(file($sampleFile));

// 10. file_get_contents()
echo "<h2>10. file_get_contents()</h2>";
echo file_get_contents($sampleFile) . "<br>";

// 11. file_put_contents()
echo "<h2>11. file_put_contents()</h2>";
file_put_contents("newfile.txt", "New file created!");
echo file_get_contents("newfile.txt") . "<br>";

// 12. fscanf()
echo "<h2>12. fscanf()</h2>";
file_put_contents("data.txt", "John 25\nJane 30");
$dataHandle = fopen("data.txt", "r");
while (!feof($dataHandle)) {
    fscanf($dataHandle, "%s %d\n", $name, $age);
    echo "Name: $name, Age: $age<br>";
}
fclose($dataHandle);

// 13. fflush()
echo "<h2>13. fflush()</h2>";
$flushHandle = fopen("flush.txt", "w");
fwrite($flushHandle, "Flush this!");
fflush($flushHandle);
fclose($flushHandle);
echo file_get_contents("flush.txt") . "<br>";

// 14. fseek()
echo "<h2>14. fseek()</h2>";
$seekHandle = fopen($sampleFile, "r");
fseek($seekHandle, 5);
echo fgets($seekHandle) . "<br>";
fclose($seekHandle);

// 15. ftell()
echo "<h2>15. ftell()</h2>";
$ftellHandle = fopen($sampleFile, "r");
fgetc($ftellHandle);
echo "Position: " . ftell($ftellHandle) . "<br>";
fclose($ftellHandle);

// 16. ftruncate()
echo "<h2>16. ftruncate()</h2>";
$truncateHandle = fopen("truncate.txt", "w+");
fwrite($truncateHandle, "This will be truncated.");
ftruncate($truncateHandle, 10);
rewind($truncateHandle);
echo fread($truncateHandle, 100) . "<br>";
fclose($truncateHandle);

// 17. rewind()
echo "<h2>17. rewind()</h2>";
$rewindHandle = fopen($sampleFile, "r");
fgetc($rewindHandle); // move pointer
rewind($rewindHandle);
echo fgetc($rewindHandle) . "<br>";
fclose($rewindHandle);

// 18. fpassthru()
echo "<h2>18. fpassthru()</h2>";
echo "Check manually by uncommenting code below<br>";
/*
$passHandle = fopen($sampleFile, "r");
fpassthru($passHandle); // Outputs the entire content
fclose($passHandle);
*/

// 19. set_file_buffer()
echo "<h2>19. set_file_buffer()</h2>";
$bufferHandle = fopen("buffered.txt", "w");
set_file_buffer($bufferHandle, 4096);
fwrite($bufferHandle, "Buffering test");
fclose($bufferHandle);
echo file_get_contents("buffered.txt") . "<br>";
?>

</body>
</html>