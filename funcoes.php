<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>


	<?php
		
        function exibirBoasVindas(){
            echo "Bem-vindo a aula de função. ";
        }

        echo exibirBoasVindas();

        function calculaAreaPipi($comprimento, $largura){
            $area = $comprimento * $largura;
            return $area;
        }

        echo '<br />';

        echo 'Resultado da função: ';
        // echo calculaAreaPipi(10, 10);

        $resultado = calculaAreaPipi(5,25);
        echo $resultado;


	?>





</body>



</html>