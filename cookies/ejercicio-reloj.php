<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de fechas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color:black;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="date"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        .respuesta {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .pasado {
            background-color: #ffdcdc;
            color: #ff0000;
        }

        .futuro {
            background-color: #d6f5d6;
            color: #008000;
        }

        .hoy {
            background-color: #e6e6e6;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Calculadora de fechas</h2>
    <form method="POST" action="">
        <label>Ingrese una fecha:</label>
        <input type="date" name="fecha" required>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
</body>
</html>

<?php

$reloj = date("H:i:s");
// echo "Reloj actual: " . $reloj . "<br><br>";


$fecha_actual = date("Y-m-d");


if (isset($_POST['submit'])) {
    $fecha_ingresada = $_POST['fecha'];

    
    if ($fecha_ingresada < $fecha_actual) {
        $diferencia = strtotime($fecha_actual) - strtotime($fecha_ingresada);
        $dias = floor($diferencia / (60 * 60 * 24));
        echo "<div class='respuesta pasado'>";
        echo "La fecha ingresada es en el pasado.<br>";
        echo "Han pasado " . $dias . " días desde la fecha ingresada.";
        echo "</div>";
    } elseif ($fecha_ingresada > $fecha_actual) {
        $diferencia = strtotime($fecha_ingresada) - strtotime($fecha_actual);
        $dias = floor($diferencia / (60 * 60 * 24));
        echo "<div class='respuesta futuro'>";
        echo "La fecha ingresada es en el futuro.<br>";
        echo "Faltan " . $dias . " días para llegar a la fecha ingresada.";
        echo "</div>";
    } else {
        echo "<div class='respuesta hoy'>";
        echo "La fecha ingresada es hoy.";
        echo "</div>";
    }
}
?>


