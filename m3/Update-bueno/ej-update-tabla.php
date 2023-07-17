<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    //Consulta para generar los primeros 5 registros de Productos
    $tablaCinco = $conexion->query('SELECT * FROM productos;');
    $resultadosTabla = $tablaCinco->fetchAll();

?>