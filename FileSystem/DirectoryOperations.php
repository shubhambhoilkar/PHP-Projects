<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
echo "<h1>File System - Part 3: File and Directory Operations</h1>";

// 1. mkdir()
echo "<h2>1. mkdir()</h2>";
if (mkdir("new_folder")) echo "Directory created<br>";

// 2. rmdir()
echo "<h2>2. rmdir()</h2>";
if (rmdir("new_folder")) echo "Directory removed<br>";

// 3. is_dir()
echo "<h2>3. is_dir()</h2>";
echo is_dir(".") ? "This is a directory<br>" : "Not a directory<br>";

// 4. is_file()
echo "<h2>4. is_file()</h2>";
file_put_contents("sample_file.txt", "Sample");
echo is_file("sample_file.txt") ? "This is a file<br>" : "Not a file<br>";

// 5. is_link()
echo "<h2>5. is_link()</h2>";

// Check if the target file exists first
if (!file_exists("Sample.txt")) {
    file_put_contents("Sample.txt", "Sample content"); // Create a dummy file
}

// Now create a symbolic link safely
if (!file_exists("sample_link")) {
    symlink("Sample.txt", "sample_link");
}

// Now check if it's a link
echo is_link("sample_link") ? "This is a link<br>" : "Not a link<br>";


// 6. is_readable()
echo "<h2>6. is_readable()</h2>";
echo is_readable("sample_file.txt") ? "Readable<br>" : "Not readable<br>";

// 7. is_writable()
echo "<h2>7. is_writable()</h2>";
echo is_writable("sample_file.txt") ? "Writable<br>" : "Not writable<br>";

// 8. is_writeable()
echo "<h2>8. is_writeable()</h2>";
echo is_writeable("sample_file.txt") ? "Writeable<br>" : "Not writeable<br>";

// 9. is_executable()
echo "<h2>9. is_executable()</h2>";
echo is_executable("sample_file.txt") ? "Executable<br>" : "Not executable<br>";

// 10. unlink()
echo "<h2>10. unlink()</h2>";
if (unlink("sample_file.txt")) echo "File deleted<br>";

// 11. rename()
echo "<h2>11. rename()</h2>";
file_put_contents("old_name.txt", "Test");
if (rename("old_name.txt", "new_name.txt")) echo "File renamed<br>";

// 12. copy()
echo "<h2>12. copy()</h2>";
if (copy("new_name.txt", "copy_name.txt")) echo "File copied<br>";

// 13. link()
echo "<h2>13. link()</h2>";
if (!file_exists("hard_link.txt")) {
    if (link("Sample.txt", "hard_link.txt")) {
        echo "Hard link created<br>";
    } else {
        echo "Failed to create hard link<br>";
    }
} else {
    echo "Hard link already exists<br>";
}

// 14. readlink()
echo "<h2>14. readlink()</h2>";
if (file_exists("symbolic_link.txt")) {
    echo "Symbolic link points to: " . readlink("symbolic_link.txt") . "<br>";
} else {
    echo "Symbolic link not found<br>";
}

// 15. linkinfo()
echo "<h2>15. linkinfo()</h2>";
if (file_exists("hard_link.txt")) {
    echo "Link information: " . linkinfo("hard_link.txt") . "<br>";
} else {
    echo "Hard link not found<br>";
}

// 16. symlink()
echo "<h2>16. symlink()</h2>";
if (!file_exists("Sample.txt")) {
    if (symlink("Sample.txt", "symbolic_link.txt")) {
        echo "Symbolic link created<br>";
    } else {
        echo "Failed to create symbolic link<br>";
    }
} else {
    echo "Symbolic link already exists<br>";
}


// 17. move_uploaded_file() — skipped (used in HTML forms)

// 18. chown()
echo "<h2>18. chown()</h2>";
@chown("Sample.txt", get_current_user());
echo "chown attempted<br>";

// 19. chgrp()
echo "<h2>19. chgrp()</h2>";
@chgrp("Sample.txt", "www-data");
echo "chgrp attempted<br>";

// 20. chmod()
echo "<h2>20. chmod()</h2>";
chmod("Sample.txt", 0755);
echo "Permissions changed<br>";
?>

</body>
</html>