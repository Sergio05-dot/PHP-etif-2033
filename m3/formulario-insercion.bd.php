<!DOCTYPE html>
<html>
<head>
  <title>Formulario insercion en BD</title>
  <link rel="stylesheet" href="css_insercion_BD.css">
</head>
<body>
  <h2>Formulario</h2>

  <form action="procesar_formulario.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <br><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>

    <br><br>

    <input type="submit" value="Enviar">
  </form>
</body>
</html>