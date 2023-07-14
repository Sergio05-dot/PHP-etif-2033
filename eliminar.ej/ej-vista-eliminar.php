<?php require 'ej-eliminar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar registros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <style>
        /* Estilos de la "x" */
        .delete-button {
            cursor: pointer;
            color: #ffffff; /* Color del texto blanco */
            background-color: #ff0000; /* Color de fondo rojo */
            padding: 4px 8px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>CÓDIGOCLIENTE</th>
            <th>EMPRESA</th>
            <th>DIRECCIÓN</th>
            <th>POBLACIÓN</th>
            <th>TELÉFONO</th>
            <th>RESPONSABLE</th>
        </tr>
        <?php foreach ($resultadosTabla as $tabla): ?>
            <tr>
                <td>
                    <form method="post">
                        <input type="hidden" name="eliminar" value="<?php echo $tabla['id']; ?>">
                        <button type="submit" class="delete-button">x</button>
                    </form>
                    <?php echo $tabla['CÓDIGOCLIENTE']; ?>
                </td>
                <td><?php echo $tabla['EMPRESA']; ?></td>
                <td><?php echo $tabla['DIRECCIÓN']; ?></td>
                <td><?php echo $tabla['POBLACIÓN']; ?></td>
                <td><?php echo $tabla['TELÉFONO']; ?></td>
                <td><?php echo $tabla['RESPONSABLE']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>