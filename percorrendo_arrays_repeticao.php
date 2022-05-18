<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php

        $registros = array(
                    array('Título' => 'Título Notícia 1', 'Conteúdo' => 'Conteúdo Notícia 1'),
                    array('Título' => 'Título Notícia 2', 'Conteúdo' => 'Conteúdo Notícia 2'),
                    array('Título' => 'Título Notícia 3', 'Conteúdo' => 'Conteúdo Notícia 3'),
                    array('Título' => 'Título Notícia 4', 'Conteúdo' => 'Conteúdo Notícia 4')
                );


        /*
        $idx = 0;
        while($idx < 3){

            echo $registros[$idx];
            echo '<br />';
            $idx++;
        }
*/
        echo '<pre>';
            print_r($registros);
        echo '<pre>';

        echo '<br /><br /><br />';

        echo 'O array possui ' . count($registros) . ' registros. ';
        $idx = 0;

        while($idx < count($registros)){

            echo '<h3>' . $registros[$idx]['Título'] . '</ h3>';
            echo '<p>' . $registros[$idx]['Conteúdo'] . '</ p>';
            echo '<hr />';
            $idx++;
        }


	?>


</body>



</html>