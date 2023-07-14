<?php
// Conexión a la base de datos
$dsn = 'mysql:host=localhost;dbname=gestion';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener los valores enviados desde el formulario
    $campo = $_POST['campo'];
    $dato = $_POST['dato'];
    $nuevo_valor = $_POST['nuevo_valor'];

    // Consulta para actualizar el dato seleccionado
    $sql = "UPDATE articulos_deportivos SET $campo = :nuevo_valor WHERE $campo = :dato";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nuevo_valor', $nuevo_valor);
    $stmt->bindParam(':dato', $dato);

    if ($stmt->execute()) {
        echo "Dato actualizado correctamente.";
    } else {
        echo "Error al actualizar el dato.";
    }
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}

$conn = null;
?>