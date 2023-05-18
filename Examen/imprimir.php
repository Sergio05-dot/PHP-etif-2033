<?php
// Codi PHP
    class impresora {
        // Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = "DINA4";
        public $color = "negre";
        // Metodes
        public function imprimeix($tinta,$paper,$tamany){
            if ($tamany) {
                echo "es pot imprimir en" . $tinta;
            } else {
                echo "Falta tinta o paper";
            }
            
        }
    }
    
    $semana = array(
        'Lunes',
        'Martes',
        'Miercoles',
        'Jueves', 
        'Viernes', 
        'Sabado',
        'Domingo'
    );
    sort($semana);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressió del document</title>
</head>
<body>
    <h1>Array de la semana ordenado alfabeticamente</h1>
   <ul>
        <?php
			foreach($semana as $semanas){
				echo '<li>' . $semanas . '</li>';
			}
		?>
	</ul>
</body>
</html>