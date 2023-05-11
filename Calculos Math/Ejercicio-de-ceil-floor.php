<?php
$unidades_por_paquete = 10;
$unidades_deseadas = 13;

$paquetes_necesarios = ceil($unidades_deseadas / $unidades_por_paquete);

echo "El cliente debe comprar $paquetes_necesarios paquete(s) de $unidades_por_paquete unidades cada uno para obtener las $unidades_deseadas unidades deseadas.";
?>