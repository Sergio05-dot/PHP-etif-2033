<?php

function strings($texto1,$texto2)
{
$texto1 = "Jordi";
$texto2 = "Jordi";

$Dosprimeros = substr ($texto1, 0,2);
$Dosultimos = substr ($texto1,-2);
$dosprimeros= substr ($texto2,0,2);
$dosultimos = substr ($texto2,-2);

if ($Dosprimeros == $dosprimeros && $Dosultimos == $dosultimos ) {
    echo "si son iguales por delante y detras";}
else {
    echo "No lo son";
}

}
?>

