<?php

function calcularAreaHexagono($lado) {
    $area = (3 * sqrt(3) * pow($lado, 2)) / 2;
    return $area;
}

if(isset($_POST['calcular'])) {
    $ladoHexagono = $_POST['lado'];
    $areaHexagono = calcularAreaHexagono($ladoHexagono);
    $areaDecimal = number_format($areaHexagono, 2); 
}
require "view.php";
echo "El área del hexágono con lado $ladoHexagono es: $areaDecimal.";