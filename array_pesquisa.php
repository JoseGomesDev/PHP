<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
		
        //in_array() true ou false, se tem ou não no array
        //array_search() retorna o índice em que o item está no array

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '<pre>';

        $existe = in_array('Maçã', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio

        if($existe){ // true/  false
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }

        echo '<hr />';
        echo array_search('Uva', $lista_frutas);
        //null

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';

        echo in_array('Uva', $lista_coisas['frutas']);


	?>

</body>



</html>