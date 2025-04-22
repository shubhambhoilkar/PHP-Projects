<!DOCTYPE html>
<html>
<body>

<h2>User Input Form</h2>
<form method="post" action="">
  Name: <input type="text" name="username"><br><br>
  Surname: <input type="text" name="surname"><br><br>
  Phone: <input type="text" name="phone"><br><br>
  Designation: <input type="text" name="designation"><br><br>
  Salary: <input type="number" name="salary"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php 
if (isset($_POST['submit'])) {
  $name = $_POST['username'];
  $surname = $_POST['surname'];
  $phone = $_POST['phone'];
  $designation = $_POST['designation'];
  $salary = $_POST['salary'];

  // Create connection (mysqli)
  $conn = new mysqli("localhost", "voxtr@localhost", "", "sam");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare SQL query
  $sql = "INSERT INTO cust_details (name, last_name, phone, designation, salary) 
          VALUES ('$name', '$surname', '$phone', '$designation', '$salary')";

  if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>

</body>
</html>
