<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['eliminar'])) {
        $id = $_POST['eliminar'];
        
        try {
            $statement = $conexion->prepare('DELETE FROM clientes_copia WHERE ID = :id');
            $statement->execute(array(':id' => $id));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $codigo = $_POST['codigo'];
    $campo = $_POST['campo'];
    $canvi = $_POST['canvi'];
    echo $campo;

    //Error si no hay "código" seleccionado
    if (empty($codigo)) {
        $errores .= 'Por favor selecciona un artículo <br />';
    }

    //Error si no hay "campo" seleccionado
    if (empty($campo)) {
        $errores .= 'Por favor selecciona un campo <br />';
    }

    //Sanear el campo "nombre"
    if (!empty($canvi)) {
        $canvi = trim($canvi);
    } else {
        $errores .= 'Por favor elimine un campo <br />';
    }

    if (!$errores) {
        $enviado = 'true';
    }
}

require 'ej-vista-eliminar.php';


if ($enviado == 'true') {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($campo == 'EMPRESA') {
        // Actualizar campo EMPRESA a NULL
        $statement = $conexion->prepare('UPDATE clientes_copia SET EMPRESA = NULL WHERE CÓDIGOCLIENTE = :codigo');
        $statement->execute(
            array(':codigo' => $codigo)
        );

    } else if ($campo == 'DIRECCIÓN') {
        // Actualizar campo DIRECCIÓN a NULL
        $statement = $conexion->prepare('UPDATE clientes_copia SET DIRECCIÓN = NULL WHERE CÓDIGOCLIENTE = :codigo');
        $statement->execute(
            array(':codigo' => $codigo)
        );

    } else if ($campo == 'POBLACIÓN') {
        // Actualizar campo POBLACIÓN a NULL
        $statement = $conexion->prepare('UPDATE clientes_copia SET POBLACIÓN = NULL WHERE CÓDIGOCLIENTE = :codigo');
        $statement->execute(
            array(':codigo' => $codigo)
        );

    } else if ($campo == 'TELÉFONO') {
        // Actualizar campo TELÉFONO a NULL
        $statement = $conexion->prepare('UPDATE clientes_copia SET TELÉFONO = NULL WHERE CÓDIGOCLIENTE = :codigo');
        $statement->execute(
            array(':codigo' => $codigo)
        );

    } else {
        // Actualizar campo RESPONSABLE a NULL
        $statement = $conexion->prepare('UPDATE clientes_copia SET RESPONSABLE = NULL WHERE CÓDIGOCLIENTE = :codigo');
        $statement->execute(
            array(':codigo' => $codigo)
        );
    }
}


