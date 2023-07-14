<?php 

$dia = date("N");

switch($dia){
	case 1:
		echo "Empezamos con energia!";
	break;

	case 2:
		echo "El mas complicado pero tu puedes";
	break;

    case 3:
		echo "Animo que es miercoles";
	break;

    case 4:
		echo "Falta poco";
	break;

    case 5:
		echo "Casi finde";
	break;

	default:
		echo "Buen finde";
	break;
}

# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>