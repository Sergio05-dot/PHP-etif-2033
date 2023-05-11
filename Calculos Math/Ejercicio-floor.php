<?php
$precio_base = 50.99;
$porcentaje_impuestos = 0.16;

$impuesto = floor($precio_base * $porcentaje_impuestos);

echo "El impuesto a pagar es de $impuesto dólares.";
?>