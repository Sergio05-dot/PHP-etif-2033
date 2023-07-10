<?php 
try {
	
	$conexion = new PDO('mysql:host=localhost;dbname=ejercicio_consola', 'root', '');

	// Consulta
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id BETWEEN 2 AND 4"); 

	foreach($resultados as $fila){
		echo $fila['Nombre'] . " de la id: ". $fila['ID']  . " tiene el correo: ". $fila['Email'] . "<br />";
	}

} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}
?>
