<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>


	<?php
		
        $texto = 'Curso completo de PHP';

		//string to lower
		echo $texto . "<br />";
		echo strtolower ($texto) ;

		echo '<hr />';
		//string to upper
		echo $texto . "<br />";
		echo strtoupper ($texto);

		echo '<hr />';
		//string to first
		echo $texto . "<br />";
		echo ucfirst ($texto);

		echo '<hr />';
		//string to lenght
		echo $texto . "<br />";
		echo strlen ($texto);

		echo '<hr />';
		//string to replace
		echo $texto . "<br />";
		echo str_replace ('PHP', 'JavaScript', $texto);

		echo '<hr />';
		//string to replace
		echo $texto . "<br />";
		echo substr ($texto, 6, 8);


	?>





</body>



</html>