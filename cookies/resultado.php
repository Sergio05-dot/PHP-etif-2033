<!DOCTYPE html>
<html>
<head>
    <title>Resultado del formulario</title>
</head>
<body>
    <h1>Resultado del formulario</h1>
    <?php
        $color_parrafos = $_POST['parrafos'];
        $color_titulo = $_POST['titulo'];
        
        echo "<p>Colores seleccionados:</p>";
        echo "<p style='color: $color_parrafos'>Este es el color de los párrafos</p>";
        echo "<h1 style='color: $color_titulo'>Este es el color del título</h1>";

        if(isset($_POST['color'])) {
            $color = $_POST['color'];
          
            echo "<body style='background-color: $color;'>";
          }

          if(isset($_POST['fontsize'])) {
            $fontsize = $_POST['fontsize'];
          
            // Aplicar el tamaño de letra
            echo "<p style='font-size: {$fontsize}px;'>Tamaño de la letra</p>";
          }
    ?>
    <a href="../cookies/ejercicio-tema-cookie.php">Volver a dar estilos</a>
</body>
</html>
