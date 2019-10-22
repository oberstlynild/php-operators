<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>

	<h1>Comparison Operator</h1>
	
	<code>
		$x = 100;<br>
		$y = 50;<br>
		if ($x !== $y)<br>
		{<br>
			echo 'X er ikke lige med med Y - datatypen er identisk, men har ikke samme værdi';<br>
		}
	</code>

	<p><br>
		<?php

		$x = 100;
		$y = 50;

		if ($x !== $y)
		{
			echo 'X er ikke lige med med Y - datatypen er identisk, men har ikke samme værdi';
		}

		?>
	</p>

</body>
</html>