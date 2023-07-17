<!DOCTYPE html>
<html>
<head>
    <title>Actualizar datos</title>
</head>
<link rel="stylesheet" href="gpt-update.css">
<body>
    <h1>Actualizar datos</h1>
    <form method="POST" action="gpt-update.php">
        <label for="campo">Campo:</label>
        <select name="campo" id="campo">
            <option value="CODIGOARTICULO">CÓDIGOARTÍCULO</option>
            <option value="SECCION">SECCIÓN</option>
            <option value="NOMBREARTICULO">NOMBREARTÍCULO</option>
            <option value="PRECIO">PRECIO</option>
        </select>
        <br><br>
        <label for="dato">Dato a actualizar:</label>
        <select name="dato" id="dato">
            <option value="AR04">AR04</option>
            <option value="AR06">AR06</option>
            <option value="AR18">AR18</option>
            <option value="AR24">AR24</option>
            <option value="AR25">AR25</option>
            <!-- Aquí puedes añadir más opciones según tus necesidades -->
        </select>
        <br><br>
        <label for="nuevo_valor">Nuevo valor:</label>
        <input type="text" name="nuevo_valor" id="nuevo_valor">
        <br><br>
        <input type="submit" value="Actualizar">
    </form>
    <br><br>
    <h2>Datos actuales:</h2>
    <table border="1">
        <tr>
            <th>CÓDIGOARTÍCULO</th>
            <th>SECCIÓN</th>
            <th>NOMBREARTÍCULO</th>
            <th>PRECIO</th>
        </tr>
        <?php
        // Conexión a la base de datos
        $dsn = 'mysql:host=localhost;dbname=gestion';
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Consulta para obtener los datos actuales
            $sql = "SELECT CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO FROM articulos_deportivos";
            $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row["CÓDIGOARTÍCULO"] . "</td>";
                    echo "<td>" . $row["SECCIÓN"] . "</td>";
                    echo "<td>" . $row["NOMBREARTÍCULO"] . "</td>";
                    echo "<td>" . $row["PRECIO"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No se encontraron datos.";
            }
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
        }

        $conn = null;
        ?>
    </table>
</body>
</html>