<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar los datos del formulario y aplicar saneamiento
    $Nombre = $_POST['Nombre'];
    $Correo = filter_var($_POST['Correo'], FILTER_SANITIZE_EMAIL);

    // Validar el nombre
    if (preg_match("/^[a-zA-Z\s\-']+$/", $Nombre)) {
        // Validar el correo electrónico
        if (filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
            // Mostrar los datos enviados
            echo "Datos recibidos:<br>";
            echo "Nombre: " . $Nombre . "<br>";
            echo "Correo: " . $Correo;
        } else {
            echo "El correo electrónico no es válido.";
        }
    } else {
        echo "El nombre no es válido. Solo se permiten letras, espacios y algunos caracteres especiales.";
    }
}

require "vista_php.php";
?>