<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
		//sequenciais (numéricos)

        $lista_frutas = [
        'a' => 'Banana',
        'b' => 'Maçã',
        'c' => 'Morango',
        'd' => 'Uva',
        'e' => 'Abacate'];
        $lista_frutas[] = 'Abacaxi';

        /*
        echo '<pre>';
            var_dump($lista_frutas);
        echo '<pre>';
            echo '<hr />';
        echo '<pre>';
            print_r($lista_frutas);
        echo '<pre>';
*/

        echo $lista_frutas['w'] = 'Jabuticaba';
        echo $lista_frutas['a'];
	?>

</body>



</html>