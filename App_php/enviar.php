<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = limpiarCampo($_POST["nombre"]);
    $correo = limpiarCampo($_POST["correo"]);
    $telefono = limpiarCampo($_POST["telefono"]);
    $mensaje = limpiarCampo($_POST["mensaje"]);

    // Validar los campos
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        echo "Por favor, completa todos los campos obligatorios.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El formato del correo electrónico no es válido.";
    } else {
        // Procesar los datos recibidos
        // ...
        // Aquí puedes realizar acciones adicionales, como enviar un correo electrónico o guardar la información en una base de datos

        // Redireccionar a una página de confirmación o mostrar un mensaje de éxito
        header("Location: confirmacion.html");
        exit();
    }
}

function limpiarCampo($campo) {
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}
?>