<!DOCTYPE html>
<html>
	<head>
		<title>
			Validation Required Form.
		</title>
	</head>
<body>
	<?php
	$nameErr = $genderErr ="";
	?>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name">
		<span class="error">* <?php echo $nameErr; ?><br>
		Email: <input type="text" name="email">
		<span class="error">* <?php echo $nameErr; ?><br><br>

		Gender:
		<span class="error">* <?php echo $genderErr; ?></span><br>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Other">Other
		<br>
		
		Intrests:
		<input type="checkbox" name="hobbies[]" value="Micro Art">Micro Art
		<input type="checkbox" name="hobbies[]" value="Coding">Coding
		<input type="checkbox" name="hobbies[]" value="Travel">Travel
		<br><br>
		Comment: <textarea name="comments" rows="2" cols="40"></textarea><br>


		<input type="Submit">
	</form>
		
<pre>
	<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
		echo "<br>";
		echo "Name: ".htmlspecialchars($_POST['name']) ."<br>";
		echo "Email: ".htmlspecialchars($_POST['email']) ."<br>";
		if(isset($_POST['gender'])){
		echo "Gender: ".htmlspecialchars($_POST['gender']) ."<br>";			
		}else{
			echo "Gender: Not selected.<br>";
		}
		
		if(!empty($_POST['hobbies'])){
			echo "Hobbies: ".implode(", ",$_POST['hobbies'])."<br>";
		}else{
			echo "Hobbies: Not selected.<br>";
		}

		if(!empty($_POST['comments'])){
			echo "Comments: ".htmlspecialchars($_POST['comments'])."<br>";
		}else{
			echo "Comments were not added.";
		}
	}
	?>
</pre>
</body>
</html>
