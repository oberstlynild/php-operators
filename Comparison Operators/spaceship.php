<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>

	<h1>Comparison Operator</h1>
	
	<code>
		$x = 5;<br>
		$y = 10;<br>
		echo ($x <=> $y);<br><br>

		$x = 10;<br>
		$y = 10;<br>
		echo ($x <=> $y);<br><br>

		$x = 15;<br>
		$y = 10;<br>
		echo ($x <=> $y);
	</code>

	<p><br>
		<?php

		$x = 5;  
		$y = 10;

		echo ($x <=> $y);
		echo "<br>";

		$x = 10;  
		$y = 10;

		echo ($x <=> $y);
		echo "<br>";

		$x = 15;  
		$y = 10;

		echo ($x <=> $y);

		?>
	</p>

</body>
</html>