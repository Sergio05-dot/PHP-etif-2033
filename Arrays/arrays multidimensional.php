<?php
$amigos = array(
	array('Marc', 35, true),
	array('Héctor', 33, 3.14),
	array('Daniel', 38,) //incluso puede tener otra variable dentro
);
echo "<br>";
echo "Los tres amigos son {$amigos [0][0]}".",".$amigos [1][0] . " y " .$amigos[2][0]. " ademas tienen {$amigos[0][1]}, {$amigos[1][1]}, {$amigos[2][1]} ". "Años respectivamente"
;