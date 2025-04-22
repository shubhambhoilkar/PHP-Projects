<!DOCTYPE html>
<html>
	<head>
		<title>
			Arrays of Php.
		</title>
	</head>
	<style>
		table{border-collapse: collapse;
			width: 50%;
			margin: 10px 0;
		}
		th,td {
			border: 1px solid;
			padding: 8px;
			text-align: left;
		}
	</style>
<body>
<pre>
<?php
$user = array("name"=>"Shubham","last_name"=>"Bhoilkar","phone"=>7045019544,"Designation"=>"Full Stack Developer");
$user["country"]="India";
//var_dump($user);

$user = array_merge($user,["DOB"=>9601,"Hobby"=>"Micro art"]);

/*
foreach ($user as $x =>$y){
	echo "$x : $y.\n";
}
*/
?>
</pre>
<table>
	<tr>
		<th>Title</th>
		<th>Value</th>
	</tr>
	<?php foreach ($user as $key => $value): ?>
	<tr>
		<td><?php 	echo ucfirst($key);	?></td>
		<td><?php 	echo $value;	?></td>
	</tr>
	<?php endforeach; ?>

</table>
<?php 
	echo "\nMulti Dimentional Array.<br>";
	$models =array(array("Bike","Royal Enfiled",519),
		array("Car","Ferrari",9601),
		array("Scooty","Yamaha",519),
		array("Off Road","Thar",519),
		array("SUV","Fortuner",2234),);

	foreach ($models as $vehicle){
		echo "The Vehicle type is ".$vehicle[0]." keeping model ". $vehicle[1]." and number plate is: ".$vehicle[2].".<br>";
	}
?>

<pre>
<?php 

?>
</pre>
</body>
</html>

<!--
/*
	$len =count($models);
	$length = count();
	echo $len;
	for ($s=0 ; $s< $len ;$s++){
		for ($j=0 ;$j< $length ;$j++){

		}
	};
	echo "\nThe Vehicle is ".$models[0][0]." with model " .$models[0][1]." and number plate ".$models[0][2].".<br>";
	echo "\nThe Vehicle is ".$models[1][0]." with model " .$models[1][1]." and number plate ".$models[1][2].".\n";


*/
-->