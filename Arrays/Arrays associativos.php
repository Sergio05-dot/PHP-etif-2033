<?php
$profesor = array(
    'nombre' => 'Marc', 
    'telefono' => 665533, 
    'edad' => 37, 
    'apellido' => 'Esteve Garcia', 
    'ciudad' => 'Castelldefels'
);
//"El profesor se llama Marc Esteve Garcia, su edad es 37, su telefono es 665533 e imparte clases en Castelldefels"

echo "El profesor se llama {$profesor['nombre']} ". "" .$profesor['apellido'] , "Su edad es {$profesor['edad']} ". "su telefono es {$profesor['telefono']} ". "e imparte clases en {$profesor['ciudad']} <br>" ;