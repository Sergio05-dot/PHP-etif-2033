<?php
$ruedaIzq=  0;
$ruedaDer= 0;

if ($ruedaIzq > 15 && $ruedaDer > 19 ){
    echo "Estamos girando a la Izquierda";
}
else if ($ruedaIzq>$ruedaDer){
    echo "Estamos girando a la derecha";
}
else if ($ruedaIzq==$ruedaDer){
    echo "Esta parado";
}
