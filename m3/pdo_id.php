<?php

$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=ejercicio_consola', 'root', '');
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");

    foreach($resultados as $fila){
		echo $fila['ID'] . ' - ' . $fila['Nombre'] . "<br />";
	}

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>