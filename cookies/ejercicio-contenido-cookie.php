<!DOCTYPE html>
<html>
<head>
    <title>Procesar Formulario</title>
    <style>
        <?php
        // Obtener los estilos seleccionados del formulario
        $colorParrafo = $_POST['colorParrafo'] ?? 'black';
        $colorFondo = $_POST['colorFondo'] ?? 'white';
        $tamanioLetra = $_POST['tamanioLetra'] ?? '16px';
        $tamanyTitol = $_POST['tamanyTitol'] ?? '32px';

         // Generar estilos CSS dinámicamente
         echo "p { color: $colorParrafo; font-size: $tamanioLetra; }";
         echo "body { background-color: $colorFondo; }";
         echo "h1 { font-size: $tamanyTitol; }";
         
        ?>
    </style>
</head>
<body>
    <h1>Estilos Aplicados</h1>
    <p>Este es un párrafo de ejemplo.</p>
    <a href="ejercicio-otro-contenido.php">Ir a otro contenido</a>
    <a href="ejercicio-tema-cookie.php">Volver a dar estilos</a>
</body>
</html>

<?php
//Damos valores a las cookies
setcookie('coloParrafo',"$colorParrafo",time() + 86400, '/');
setcookie('colorFondo',"$colorFondo",time() + 86400, '/');
setcookie('tamanioLetra',"$tamanioLetra",time() + 86400, '/');
setcookie('tamanyTitol',"$tamanyTitol",time() + 86400, '/');
?>