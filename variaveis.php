<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
		//String
		$nome = "José";
		$idade = 19;
		$sexo = "Masculino";
		$fumante = true;

		$idade = 25;

	?>

	<h1>Ficha cadastral</h1>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>idade: <?= $idade ?></p>
	<p>sexo: <?= $sexo ?></p>
	<p>fumante: <?= $fumante ?></p>

</body>



</html>