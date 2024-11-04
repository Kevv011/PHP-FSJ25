<?php 
/* EJERCICIO #1: Funcion de serie Fibonacci */

function generarFibonacci($n) {
    if ($n <= 0) {
        return "";
    } elseif ($n == 1) {
        return "0";
    }

    $fibonacci = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return implode(", ", $fibonacci);
}

echo generarFibonacci(10); //Genera la serie fibonacci hasta el numero 10
/* --------------------------------------------------------------------------------------- */

/* EJERCICIO #2: Numeros primos 
Un numero es primo si son divisibles entre 1 o entre el mismo (2 DIVISORES*/

$numero = 29;   //Numero a comprobar si es primo
$contador = 0;  //Contador de divisores

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $contador++;                   //Si el residuo es 0, aumenta el contador
    }
}

//Si el contador es 2 hay 2 divisores en ese numero, por lo tanto es primo
echo $primo = ($contador == 2) ? "Es un numero PRIMO" : "No es un numero PRIMO"; 

/* --------------------------------------------------------------------------------------- */

/* EJERCICIOS #3: Generar un ejercicio que compruebe si una palabra es un PALINDROMO
PALINDROMO: Palabra o frase que se lee igual al darle vuelta */

$texto = "anita lava la tina";               //Palabra o frase a comprobar
$noSpaceText = str_replace(" ", "", $texto); //Quita los espacios si es una frase
$revPalabra = strrev($noSpaceText);          //Le da la vuelta a la palabra o frase

echo $palindromo = ($noSpaceText === $revPalabra) ? "Es un PALINDROMO" : "no es un PALINDROMO";

?>