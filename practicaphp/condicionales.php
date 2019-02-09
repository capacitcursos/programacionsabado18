<?php 
//CONDICIONALES
echo "<h1>CONDICIONALES EN PHP</h1>";

/*
operadores de comparacion

=   IGUAL
>   MAYOR QUE
<   MENIR QUE
>=  MAYOR O IGUAL QUE
<=  MENOR O IGUAL QUE

*/

$edad= 17;

if ($edad > 18) {
	echo "ES MAYOR DE EDAD <br>";
}

//Ejemplo2

$hora=12.5;

if ($hora <= 12) {
	echo "Buen dia";
} else {
	echo "Buenas tardes";
}


//EJEMPLO 3
echo"<br>";
if ($hora < 12) {
	echo "La hora es menor a 12";
} else if ($hora >= 12 && $hora <= 13 ){
	echo "Medio dia";
} else {
     echo "La Hora es mayor a 13";
}

//CONDICIONAL SWITCH
echo "<br>";
$color= "azul";

switch ($color) {
	case 'rojo':
		echo "Mi color favorito es rojo";
		break;

    case 'azul':
		echo "Mi color favorito es azul";
		break;
	
	default:
			echo "No tengo color favorito";
		break;
}





?>