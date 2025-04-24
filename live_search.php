<!DOCTYPE html>
<html>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "testdb");
$q = $_GET['q'];
$result = $conn->query("SELECT name FROM users WHERE name LIKE '$q%'");

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}
?>

</body>
</html>
