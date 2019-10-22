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
		$y = '100';<br>
		if ($x === $y)<br>
		{<br>
			echo 'X er lige med Y men ikke identisk';<br>
		}<br>
		echo 'Vi kom ikke ind i loopet, fordi X ikke er identisk med Y i datatype, selvom de har samme "værdi"'
	</code>

	<p><br>
		<?php

		$x = 100;
		$y = '100';

		if ($x === $y)
		{
			echo 'X er lige med Y men ikke identisk';
		}
		echo 'Vi kom ikke ind i loopet, fordi X ikke er identisk med Y i datatype, selvom de har samme "værdi"'

		?>
	</p>

</body>
</html>