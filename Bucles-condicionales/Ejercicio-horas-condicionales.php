<?php
$Hora= date("H");
?>
<?php if($Hora < 18){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Buenos dias!</h1>
	</body>
	</html>
<?php } ?>

<?php if($Hora > 16){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Buenas tardes!</h1>
	</body>
	</html>
<?php } ?>