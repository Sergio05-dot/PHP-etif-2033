<!DOCTYPE html>
<html>
<head>
    <title>Formulario de selección de colores</title>
</head>
<body>
    <h1>Formulario de selección de colores</h1>
    <form action="resultado.php" method="post">
        <label for="parrafos">Color de los párrafos:</label>
        <input type="color" id="parrafos" name="parrafos"><br><br>
        <label for="titulo">Color del título:</label>
        <input type="color" id="titulo" name="titulo"><br><br>
        <label for="color">Color de fondo:</label>
        <input type="color" id="color" name="color"><br><br>
        <label for="fontsize">Seleccione el tamaño de letra:</label>
        <input type="number" id="fontsize" name="fontsize" min="1" max="100"><br><br>
         <input type="submit" value="Enviar">
    </form>
</body>
</html>




