<!DOCTYPE html>
<html>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "testdb");

$vote = $_GET['vote'];
$conn->query("UPDATE poll SET count = count + 1 WHERE answer = '$vote'");

$result = $conn->query("SELECT * FROM poll");
while ($row = $result->fetch_assoc()) {
    echo $row['answer'] . ": " . $row['count'] . "<br>";
}
?>

</body>
</html>
