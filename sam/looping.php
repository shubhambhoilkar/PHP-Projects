<!DOCTYPE html>
<html>
	<head>
		<title>Looping</title>
	</head>
	<body>
		<pre>
			<?php 
			$var =["BMW","Mercedies","Ferrari","Jagur","Bugati","Lamborgini","Porsche","Rolls Royce","Aston Martin"];

			echo "This is For Loop.\n";
			for ($i=0 ;$i<count($var);$i++){
				echo "The Current Car is: $var[$i].\n";
			}

			echo "\nThis is While loop.\n";
			$j=0;
			while ($j<count($var)){
				echo "The Current Car is: $var[$j].\n";
				$j++;
			}

			echo "\nThis is do while loop.\n";
			$s=0;
			do{echo "The Current Car is: $var[$s].\n";
				$s++;
			}while ($s<count($var));

			echo "\n This is froeach loop.\n";
			$cars= array($var);
			foreach ($var as $b){
				echo "The Current car is: $b.\n";
			}
			?>

		</pre>
	</body>
</html>