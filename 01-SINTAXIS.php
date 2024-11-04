<?php

//SWITCH-CASE
echo "Elige una opcion:";

$opcion = "A";

switch ($opcion) {
    case "A": 
        echo "Elegiste la opcion 1";
        break;

    case "B": 
        echo "Elegiste opcion 2";
        break;
}

//VAR_DUMP
$variable = true;
var_dump($variable);

//OPERADOR TERNARIOS
$n1 = 3; 
$n2 = 4;

echo $operador = $n2 > $n1 ? "VERDADERO" : "FALSO";

//ESTRUCTURA MATCH
$numero = 32;
echo $result = match ($numero) {
    1 => "UNO",
    2 => "DOS",
    3 => "TRES",
    default => "OTRO NUMERO",
};

?>