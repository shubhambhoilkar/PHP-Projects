<!DOCTYPE html>
<html>
	<head>
		<title>Sorting</title>
	</head>
<body>
<pre>
<?php 
	$var =array("BMW","Mercedies","Ferrari","Jagur","Bugati","Lamborgini","Porsche","Rolls Royce","Aston Martin");

	$user = array("name"=>"Shubham",
		"last_name"=>"Bhoilkar",
		"phone"=>7045019544,
		"Designation"=>"Full Stack Developer",
		"Country"=>"India",
		"Hobby"=>"Microart");


	echo "Ascending Sorting:\n";
	sort($var);	//sorting assending

	$len = count($var);
	for ($i=0 ;$i<$len ;$i++ ){
		echo $var[$i]."\n";
	}

	echo "\nDescending Sorting:\n";
	rsort($var);

	for ($j=0 ;$j<$len ;$j++){
		echo "$var[$j] \n";
	}

	echo "\nAscending order in associate array key.\n";
	ksort($user);

	$length= count($user);
	foreach ($user as $j=>$s){
		echo "$j => $s"."\n" ;
	}

	echo "\nAscending order in associate array value.\n";
	asort($user);

	$length= count($user);
	foreach ($user as $j=>$s){
		echo "$j => $s"."\n" ;
	}
	echo "\nDescending order in associate array key.\n";
	krsort($user);

	$length= count($user);
	foreach ($user as $j=>$s){
		echo "$j => $s"."\n" ;
	}

	echo "\nDescending order in associate array value.\n";
	arsort($user);

	$length= count($user);
	foreach ($user as $j=>$s){
		echo "$j => $s"."\n" ;
	}
?>
</pre>	
</body>
</html>