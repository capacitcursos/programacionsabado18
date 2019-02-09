<?php 
//$nombre ="Juan";
//saludar($nombre);

function saludar($nombre){
  echo "Hola ".$nombre ;
}

function sumar($valor1, $valor2){
    $resultado = $valor1 + $valor2;
    return $resultado;
}

function restar($valor1, $valor2){
    $resultado = $valor1 - $valor2;
    return $resultado;
}

function multiplicar($valor1, $valor2){
    $resultado = $valor1 * $valor2;
    return $resultado;
}

function dividir($valor1, $valor2){
    $resultado = $valor1 / $valor2;
    return $resultado;
}
 
?>
