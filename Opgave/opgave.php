<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>

	<h1>Opgave</h1>
	
	<!--
	Du skal udregne din BMI
	Din BMI er din kropsvægt / (højde * højde)
	Indtast dine tal i PHP koden nedenfor og 
	--->

	<p>

		<?php

		$kropsvaegt = 120; //Indtast din vægt i kilo (eks: 65))
		$hoejde = 1.85; //Indtast din højde i meter (eks: 1.85))
		$hoejdeMath = $hoejde ** 2; //Højde^2
		$resultat = $kropsvaegt / $hoejdeMath;
		$fixedResultat = number_format($resultat, 1); //Fixer resultatet til 2 decimaler.
		echo 'Din BMI er '. $fixedResultat;

		?>

	</p>

	<!--
	Nu skal du finde ud af om du er undervægtig, normalvægtig, overvægtig, døjer med fedme eller døjer med svær fedme

	Ret i de følgende IF statements, således at de får de korrekte operators, værdier og variabler
	--->

	<p>
		<?php

		//$fixedResultat skal være mindre end 18.5
		//Indsæt den manglende operator
		if ($fixedResultat /*Indsæt operator*/ 18.5) {
			echo 'Du er undervægtig';
		}

		//$fixedResultat skal være større eller lige med 18.5 og mindre end 24.9
		//Indsæt de manglende operators
		if ($fixedResultat /*Indsæt operator*/ 18.5 && $fixedResultat /*Indsæt operator*/ 24.9) {
			echo 'Du er normalvægtig';
		}

		//$fixedResultat skal være større eller lige med 25 og mindre end 29.9
		//Indsæt de manglende værdier
		if ($fixedResultat >= /*Indsæt værdi*/ && $fixedResultat < /*Indsæt værdi*/) {
			echo 'Du er overvægtig';
		}

		//$fixedResultat skal være større eller lige med 30 og mindre end 39.9
		//Indsæt de manglende variabler
		if (/*Indsæt variabel*/ >= 30 && /*Indsæt variabel*/ < 39.9) {
			echo 'Du døjer med fedme';
		}

		//$fixedResultat skal være større eller lige med 40
		//Indsæt den manglende operator
		if ($fixedResultat /*Indsæt operator*/ 40) {
			echo 'Du døjer med svær fedme';
		}


		?>
	</p>


</body>
</html>