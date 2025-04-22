<!DOCTYPE html>
<html>
	<head>
		<title>
			Mutliple fields in form.
		</title>
	</head>
<body>
	<form method ="post" action="">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>

		Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female<br>	
		
		Intrests:
		<input type="checkbox" name="hobbies[]" value="Micro Art">Micro Art
		<input type="checkbox" name="hobbies[]" value="Coding">Coding
		<input type="checkbox" name="hobbies[]" value="Travel">Travel

		<input type="Submit">
	</form>
		
<pre>
	<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
		echo "";
		echo "Name: ".htmlspecialchars($_POST['name']) ."<br>";
		echo "Email: ".htmlspecialchars($_POST['email']) ."<br>";
		if(isset($_POST['gender'])){
		echo "Gender: ".htmlspecialchars($_POST['gender']) ."<br>";			
		}else{
			echo "Gender: Not selected.<br>";
		}
		
		if(!empty($_POST['hobbies'])){
			echo "Hobbies: ".implode(", ",$_POST['hobbies']);
		}else{
			echo "Hobbies: Not selected.<br>";
		}
	}
	?>
</pre>
</body>
</html>