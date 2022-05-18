<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
        //gettype() => retorna o tipo da variável;
        $valor = 15.35;
        // $valor2 = (float) $valor; // float, double;
        $valor2 = (int) $valor; // string;

        echo gettype($valor);
        echo '<br />';
        echo gettype($valor2);
        

	?>


</body>



</html>