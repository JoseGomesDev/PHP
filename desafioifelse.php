<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php

        $idade = 25;
        $peso = 67.5;

	?>

    <h1>Pode ou não doar sangue?</h1>

    <p>
        Regra: Se a idade for entre 16 e 69 anos, e o peso for maior que 50kg, então a pessoa está apta a doar sangue.
    </p>



    <p> Idade: <?=$idade?></p>
    <p> Peso: <?=$peso?></p>

    <p>
        <?php 
        
            $idade >= 16 && $idade <=69 && $peso >= 50 ? 'Atende aos requisitos' : 'Não atende aos requisitos';

            /* 
            if($idade >= 16 AND $idade <= 69 AND $peso >= 50){
                echo 'Atende aos requisitos.';
            } else {
                echo 'Não atende aos requisitos.';
            } 
        
        */
        
         ?> 

    </p>



        

</body>



</html>