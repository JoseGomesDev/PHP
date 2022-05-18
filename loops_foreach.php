<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
		
        $itens = ['Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira'];

        echo '<pre>';
            print_r($itens);
        echo '<pre>';

        foreach($itens as $item){
            echo "$item <br />";

            if($item == 'Mesa'){
                echo 'Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras.';
            }

            
        }




	?>

</body>



</html>