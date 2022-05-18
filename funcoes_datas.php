<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php
		/*
        // recuperação da data atual / data corrente

        echo date('d/m/Y H:i');

        // dia/mes/ano horas:minutos

        echo '<br />';
        echo date_default_timezone_get();
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br />';
        echo date('d/m/Y H:i');
        echo '<br />';
        echo date_default_timezone_get();
*/
        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        //timestamp
        //01/01/1970

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br />';
        echo $data_final . ' - ' . $time_final;

        $diferenca_times = $time_final - $time_inicial;

        echo '<br />';
        echo 'A diferença em segundos entre a data inicial e a data final é de: ' . $diferenca_times;

        $segundos_existentes_dia = 24*60*60;

        echo '<br />';
        echo 'Um dia possui ' . $segundos_existentes_dia . ' segundos';

        $diferenca_dias = $diferenca_times / $segundos_existentes_dia;

        echo '<br />';
        echo 'A diferença em dias é de: ' . $diferenca_dias;


	?>

</body>



</html>