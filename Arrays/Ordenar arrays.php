<?php

// $meses = array(
// 	'Enero', 'Febrero', 'Marzo', 'Abril', 
// 	'Mayo', 'Junio', 'Julio', 'Agosto',
// 	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
// );

// $numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

$semana = array(
    "lunes",
    "martes",
    "miércoles",
    "jueves",
    "viernes",
    "Sabado",
    "Domingo"
  );

// rsort($numeros);
// sort($meses);
sort($semana);
 //Función del array que queremos ordenar
// rsort($meses); Inverso del array
// rsort($numeros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
        <?php
			foreach($semana as $alberto){
				echo '<li>' . $alberto . '</li>';
			}
		?>
	</ul>
</body>
</html>
