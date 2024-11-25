<?php
/* Implementa una función que ordene una lista de palabras alfabéticamente utilizando el algoritmo Merge Sort. 
Muestra la lista antes y después de aplicar el algoritmo. */

function separar($array) {

    if (count($array) <= 1) {  //Funcion base de detencion de la recursividad
        return $array;
    }

    $mitad = floor(count($array) / 2);           //Se obtiene matematicamente la mitad del array
    $izquierda = array_slice($array, 0, $mitad); //Se obtiene primera mitad desde el primer elemento hasta la mitad
    $derecha = array_slice($array, $mitad);      //Se obtiene segunda mitad desde la mitad hasta el final

    //Genera la recursividad para ordenar cada mitad
    $izquierda = separar($izquierda);
    $derecha = separar($derecha);

    return mezclar($izquierda, $derecha);
}

function mezclar($izquierda, $derecha) {
    $resultado = []; //Array que debera obtener los resultados ordenados

    while (count($izquierda) > 0 && count($derecha) > 0) {

        if (strcmp($izquierda[0], $derecha[0]) < 0) { 
            $resultado[] = $izquierda[0];
            $izquierda = array_slice($izquierda, 1);
        } else {
            $resultado[] = $derecha[0];
            $derecha = array_slice($derecha, 1);
        }
    }

    //Se agregan elementos restantes de $izquierda si llegasen a haber al final
    while (count($izquierda) > 0) {
        $resultado[] = $izquierda[0];
        $izquierda = array_slice($izquierda, 1);
    }

    //Se agregan elementos restantes de $derecha si llegasen a haber al final
    while (count($derecha) > 0) {
        $resultado[] = $derecha[0];
        $derecha = array_slice($derecha, 1);
    }

    return $resultado;
}

$palabras = ["zorro", "elefante", "gato", "jirafa", "ardilla", "búho", "conejo"];

$ordenadas = separar($palabras);

print_r($ordenadas);

?>