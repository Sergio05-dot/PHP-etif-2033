<?php
$conexion = new mysqli('localhost', 'root', '', 'ejercicio_consola');

if ($conexion->connect_errno) {
    die('Lo siento, hubo un problema con el servidor');

} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $edad = $_POST["edad"];

        $errores = [];

        if (empty($nombre)) {
            $errores[] = "El campo nombre es requerido.";
        }

        if (empty($email)) {
            $errores[] = "El campo email es requerido.";
            
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El email ingresado no es válido.";
        }

        if (empty($edad)) {
            $errores[] = "El campo edad es requerido.";
        } elseif (!is_numeric($edad) || $edad < 0) {
            $errores[] = "La edad ingresada no es válida.";
        }

        if (!empty($errores)) {
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>" . $error . "</li>";
            }
            echo "</ul>";
        } else {
            $statement = $conexion->prepare("INSERT INTO usuarios (nombre, email, edad) VALUES (?, ?, ?)");

            $statement->bind_param('ssi', $nombre, $email, $edad);

            if ($statement->execute()) {
                echo "Los datos se han insertado correctamente en la base de datos.";
            } else {
                echo "Hubo un error al insertar los datos en la base de datos.";
            }

            $statement->close();
        }
    }

    $conexion->close();
}
?>