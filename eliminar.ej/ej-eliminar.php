<?php

try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$tablaCinco = $conexion->query('SELECT * FROM clientes_copia;');
$resultadosTabla = $tablaCinco->fetchAll();
?>

