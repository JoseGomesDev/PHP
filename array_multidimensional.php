<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
		
        $lista_coisas = array();
        
        $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango');
        $lista_coisas['pessoas'] = ['João', 'José', 'Maria'];

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';

        echo '<hr />';
        echo $lista_coisas['frutas'][2];
        echo '<br />';
        echo $lista_coisas['pessoas'][1];


	?>

</body>



</html>