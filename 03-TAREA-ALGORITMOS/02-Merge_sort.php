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

    return mezclar($izquierda, $derecha);       //Se retorna $izquierda y $derecha ordenados para pasar a la funcion MEZCLAR
}


function mezclar($izquierda, $derecha) {
    $resultado = []; //Array que debera obtener los resultados ordenados

    while (count($izquierda) > 0 && count($derecha) > 0) { //WHILE que se activa si hay elementos en $izquierda y $derecha

        if (strcmp($izquierda[0], $derecha[0]) < 0) {  //Si el texto de $izquierda es menor a $derecha segun su orden alfabetico en ASCII
            $resultado[] = $izquierda[0];              //Se agrega el elemento de $izquierda al array $resultado
            $izquierda = array_slice($izquierda, 1);   //y se elimina dicho elemento para ir vaciando poco a poco $izquierda
        } else {
            $resultado[] = $derecha[0];                //Misma operacion pero con $derecha, donde si $derecha es menor, se agrega al array $resultado
            $derecha = array_slice($derecha, 1);       //y se elimina dicho elemento para ir vaciando poco a poco $derecha
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

//Ejemplo de uso
$palabras = ["zorro", "elefante", "gato", "jirafa", "ardilla", "búho", "conejo"];

echo "Lista original: " . implode(", ", $palabras) . "\n";  //Lista original
$palabras = array_map('strtolower', $palabras);             //Convierte los nombres en Minus para una comparacion efectiva
$palabrasOrdenadas = separar($palabras);                    //Ordena los nombres con el Merge Sort

echo "Lista ordenada: " . implode(", ", $palabrasOrdenadas); //Lista ordenada
?>