<?php

// for($i = 0 ; $i <= 100 ; $i = $i + 5 ){
// 	echo $i . "<br />";
// }

for($i=3; $i<=99; $i+=3) {
    if($i == 39 || $i == 78) {
        continue;
    }
    echo $i . "<br>";
}

// for($i = 99; $i >= 3  ; $i -= 3 ){
// 	echo $i . "<br />";
// }
?>