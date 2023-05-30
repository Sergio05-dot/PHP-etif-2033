<?php
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $nombre = limpiarCampo($_POST["nombre"]);
        $correo = limpiarCampo($_POST["correo"]);
        $telefono = limpiarCampo($_POST["telefono"]);
        $mensaje = limpiarCampo($_POST["mensaje"]);

        // Validar los campos
        if (empty($nombre)) {
            $errores[] = "El campo Nombre es obligatorio.";
        }

        if (empty($correo)) {
            $errores[] = "El campo Correo es obligatorio.";
        } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El formato del correo electrónico no es válido.";
        }

        if (empty($mensaje)) {
            $errores[] = "El campo Mensaje es obligatorio.";
        }

        if (empty($errores)) {
        
            header("Location: confirmacion.html");
            exit();
        }
    } elseif (isset($_POST["submit"])) {
        
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["submit"])) {
        $nombre = limpiarCampo($_GET["nombre"]);
        $correo = limpiarCampo($_GET["correo"]);
        $telefono = limpiarCampo($_GET["telefono"]);
        $mensaje = limpiarCampo($_GET["mensaje"]);

        // Validar los campos
        if (empty($nombre)) {
            $errores[] = "El campo Nombre es obligatorio.";
        }

        if (empty($correo)) {
            $errores[] = "El campo Correo es obligatorio.";
        } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El formato del correo electrónico no es válido.";
        }

        if (empty($mensaje)) {
            $errores[] = "El campo Mensaje es obligatorio.";
        }

        if (empty($errores)) {
           
            header("Location: confirmacion.html");
            exit();
        }
    } elseif (isset($_GET["submit2"])) {
        
    }
}

function limpiarCampo($campo) {
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}
?>