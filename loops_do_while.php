<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php

        $x = 10;
		
        do { // o ''do'' é executado pelo menos 1 vez.
            echo "X = $x <br />";

            $x += 10;
        } while($x <= 200);



	?>

</body>



</html>