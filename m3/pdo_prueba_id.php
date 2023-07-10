<?php

try {
	$connection = new PDO('mysql:host=localhost;dbname=ejercicio_consola', 'root', '');
	

	//Prepared Statements
	$statement = $connection->prepare('SELECT * FROM usuarios WHERE id= :id');
	$statement->execute(
		array(':id'=> 5)
	);

	$resultados = $statement->fetch();
	print_r($resultados);

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>