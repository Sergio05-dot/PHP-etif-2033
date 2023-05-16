<?php

$aibofobia;
    function Palindromo($texto)
{
    $texto = strtolower(str_replace("  " , " ", $texto));
    

    $longitud = strlen($texto);
    

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($texto[$i] !== $texto[$longitud - $i - 1]) {
            return false; // No es un palíndromo
        }
    }
    
    return true; // Es un palíndromo
}
$texto = "aibofobia";

if (Palindromo($texto)) {
    echo $texto .  " es un palíndromo.";
} else {
    echo $texto . " no es un palíndromo.";
}
?>