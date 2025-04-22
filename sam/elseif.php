<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		<?php 
			$var = rand(0,100);
			if ($var < 50) {
				echo "Ohh it's less than 50 :i.e $var" ;
			}
			elseif ($var > 50){
				echo "Ohh it's greater than 50 :i.e $var";
			}
			else {
				echo "Ohh we got the exact 50!";
			}
		?>
	</pre>
</body>
</html>