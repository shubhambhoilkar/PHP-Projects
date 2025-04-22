<!DOCTYPE html>
<html>
	<head>
		<title>
			POST Method.
		</title>
	</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Name: <input type="text" name="username">
	<input type="submit" name="submit" value="submit">
</form>
<pre>
<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["username"])){
		$nameError ="Name is required.";
	}else{
		$name= htmlspecialchars(trim($_POST["username"]));
	}
}
?>
</pre>
<form method="post" action="">
	Name: <input type="text" name="username" value ="<?php echo $name; ?>">
	<span style="color:red"><?php echo $nameError; ?></span>
	<br><br>
	<input type ="submit">
</form>
<?php 
	if(!empty($name)){
		echo "<h3>Welcome, $name!</h3>";
	}
?>
	</body>
</html>