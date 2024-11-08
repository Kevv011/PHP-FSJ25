<?php

//EJERCICIO #1: Array Invertido
function arrayInvertido(array $array) {
    $arrayInv = [];                  //Array que guardar los elementos invertidos
    $iterador = count($array) - 1;   //Hace que comience desde el ultimo elemento del array

    while ($iterador >= 0) {         //Bucle WHILE que genera los elementos en reversa y los guarda en $arrayInv
        $arrayInv[] = $array[$iterador];
        $iterador--;                 //DECREMENTO para que se ingresen valores invertidos
    }

    return $arrayInv;
}

$numeros = [1, 2, 3, 4, 5, 6, 7];
$op = arrayInvertido($numeros);
print_r($op);


//FORMA MAS SENCILLA: Hecha y mostrada nada mas por agregar conocimiento :D
$arrNumeros = [1, 2, 3, 4, 5, 6, 7];
$arrInvertido = array_reverse($arrNumeros);
print_r($arrInvertido);

/* ----------------------------------------------------------------------------------------------------------------- */

//EJERCICIO #2: Suma de numeros pares en un array
function sumaPares(array $arrayN) {
    $sumaPares = 0;                 //Se inicializa la variable que guardara la suma de PARES del array

    foreach ($arrayN as $normal) {
        if($normal % 2 == 0) {      //FOREACH para recoger todos los numeros pares del array segun la CONDICION
            $sumaPares += $normal;  //Los pares encontrados se incrementan en $sumaPares
        }
    }
    return $sumaPares;
}

$numeros2 = [2, 3, 6, 3, 5, 10];
$mostrarNumeros = implode(", ", $numeros2); //IMPLODE convierte un array en string. Usado para mostrar los numeros del array
$suma = sumaPares($numeros2);               //$suma guarda el resultado de la FUNCION

echo "La suma de numeros pares en el array [ $mostrarNumeros ] es $suma";

/* ----------------------------------------------------------------------------------------------------------------- */

//EJERCICIO #3: Problema de frecuencia de caracteres
function frecuenciaCaracteres($cadenaTexto) {
    $conteoCaracteres = [];                         //Array que guardara el array asociativo de frecuencia de caracteres

    $cadenaTexto = strtolower($cadenaTexto);        //Convierte a minusculas para contar todas las letras de igual forma
    $cadenaArray = str_split($cadenaTexto);         //divide la cadena de texto en un array de caracteres
    $frecuencia = array_count_values($cadenaArray); //Toma el valor de frecuencia de cada caracter de $cadenaArray

    foreach($frecuencia as $frec => $valor) {   //FOREACH para contar cuantas veces estan los caracteres en una cadena de texto
        $conteoCaracteres[$frec] = $valor;      //e ingresarlos al array asociativo destinado: $conteoCaracteres                  
    };

    return $conteoCaracteres;
}

$texto = "boca es el mejor del mundo che";
print_r(frecuenciaCaracteres($texto));

//EJERCICIO 4: Bucles anidados para imprimir patron de astericos en forma de piramide

$n = 10;

for ($i = 1; $i <= $n; $i++) {              //Se empieza a recorrer el bucle segun el valor de filas definido en $n.
    for ($j = 1; $j <= $n - $i; $j++) {     //Se imprimen espacios en blanco restando 1 para generar las filas de la piramide
        echo " ";                           //y para que se genere la forma centrada y no a la izquierda.
    }
    
    for ($k = 1; $k <= (2 * $i - 1); $k++) { // Una vez generado espacios por fila, Se Imprimimen los asteriscos
        echo "*";                            // multiplicando $i x 2 y restando 1, para generar el patron esperado
    }

    echo "\n";                               // Salto de linea entre filas establecidas
}

?>