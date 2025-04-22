<!doctype html>
<html>
	<head>
		<title>
			Passing N arguments.
		</title>
	</head>
<body>
<pre>
<?php 
	class demo{
		static function sum_many_number(...$x) {
			$n =0;
			$len = count($x);
			for ($i=0 ;$i<$len ;$i++){
				$n +=$x[$i];
			}
			echo "Therefore the sum of all argumets are: $n";
		}
	}
	$demo_obj= new demo;
	demo::sum_many_number(1,2,3,4,5,6,7,8,9.9);
?>
</pre>
</body>
</html>