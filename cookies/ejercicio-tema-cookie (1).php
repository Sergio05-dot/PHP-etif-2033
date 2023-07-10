<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Estilos</title>
</head>
<body>
    <h1>Formulario de Estilos</h1>

    <form action="ejercicio-contenido-cookie.php" method="post">
        <label for="colorParrafo">Color del Párrafo:</label>
        <select name="colorParrafo" id="colorParrafo">
            <option value="black">Negro</option>
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>

        <br>

        <label for="colorFondo">Color de Fondo:</label>
        <select name="colorFondo" id="colorFondo">
            <option value="white">Blanco</option>
            <option value="lightgray">Gris Claro</option>
            <option value="lightblue">Azul Claro</option>
            <option value="lightgreen">Verde Claro</option>
        </select>

        <br>

        <label for="tamanioLetra">Tamaño de párrafos:</label>
        <select name="tamanioLetra" id="tamanioLetra">
            <option value="12px">Pequeño</option>
            <option value="16px">Mediano</option>
            <option value="26px">Grande</option>
            <option value="32px">Muy Grande</option>
        </select>
        <br>

        <label for="tamanyTitol">Tamaño de titulares:</label>
        <select name="tamanyTitol" id="tamanyTitol">
            <option value="26px">Pequeño</option>
            <option value="32px">Normal</option>
            <option value="48px">Grande</option>
        </select>

        <br>

        <input type="submit" value="Aplicar Estilos">
    </form>
</body>
</html>