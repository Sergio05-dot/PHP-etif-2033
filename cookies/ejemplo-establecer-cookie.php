<?php
// Define los valores para la cookie
$nombreCookie = "miCookie";
$valorCookie = "Hola, esta es mi cookie";
$expiracion = time() + (86400 * 30); // Caduca en 30 días
$ruta = "/"; // Disponible en todo el sitio
// $dominio = "ejemplo.com";
// $seguro = true; // Solo se envía a través de HTTPS
// $soloHTTP = true; // Accesible solo a través de HTTP (no JavaScript)

// Establece la cookie
setcookie($nombreCookie, $valorCookie, $expiracion, $ruta); 
//+ ..., $dominio, $seguro, $soloHTTP)

// Mensaje de éxito
echo "La cookie ha sido establecida.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cookie establecida</title>
</head>
<body>
    <a href="ejemplo-mostrar-cookie.php">Ir a mostrar contenido</a>
</body>
</html>