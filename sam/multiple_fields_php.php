<!DOCTYPE html>
<html>
	<head>
		<title>
			Validation Required Form.
		</title>
	</head>
<body>
<pre>
	<?php 
	$nameError =$emailError=  $genderError ="";
	$name= $email= $gender = $comments="";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		// and  	-- have to add this
		if (empty($_POST["name"])) {
			$nameError ="Name is required!";
		}else{
			$name =inspect_input($_POST["name"]);
		}

		// && filter_var($email,FILTER_VALIDATION_EMAIL) 	--have to add this
		if (empty($_POST["email"])){
			$emailError ="Email is required!";
		}else{
			$email =inspect_input($_POST['email']);
		}

		if (empty($_POST['gender'])){
			$genderError ="Gender is required!";
		}else{
			$gender =inspect_input($_POST['gender']);
		}

		if (empty($_POST['comments'])){
			$comments ="Can you please add comments for better feedback!";
		}else{
			$comments =inspect_input($_POST['comments']);
		}

	}
	function inspect_input($data){
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;

	}
	?>
</pre><form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name">
		<span class="error">* <?php echo $nameError; ?><br>
		Email: <input type="text" name="email">
		<span class="error">* <?php echo $emailError; ?><br><br>

		Gender:
		<span class="error">* <?php echo $genderError; ?></span><br>
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
		<br><br>
	</form>
	
	<?php 
	echo "Here are your inputs: <br>";
	echo $name ."<br>";
	echo $email ."<br>";
	echo $gender ."<br>";
	echo $comments ."<br>";
	?>
</body>
</html>
