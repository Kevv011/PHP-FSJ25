<?php
/* Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo Insertion Sort.
Muestra la lista antes y después de aplicar el algoritmo. */

function insertionSort($array) {
    for ($i = 0; $i < count($array); $i++) { //FOR que recorre el array desde posicion 0 hasta la longitud del array
        $val = $array[$i];                   //Se guarda el valor de la posicion actual en una variable de apoyo  
        $j = $i - 1;                         //Se guarda la posicion anterior a la actual en otra variable de apoyo

        while ($j >= 0 && $array[$j] > $val) { //WHILE que se activa si la posicion anterior es mayor a la actual
            $array[$j + 1] = $array[$j];       //Si se cumple la condicion, la posicion siguiente toma el valor de la actual
            $j--;                              //Se disminuye el valor de $j para seguir comparando
        }
        $array[$j + 1] = $val;                 //Si la condicion del WHILE no se cumple, se asigna el valor de la variable de apoyo a la posicion siguiente
    }
    return $array;
}

/* ADICIONAL
--> PHP trabaja los strings y caracteres basado en codificacion ASCII, por ello el insertion Sort genera el mismo funcionamiento
    de ordenamiento tanto en numeros como en strings */

//Ejemplo de uso
$names = ['Kevin', 'Ana', 'Adriana', 'Luis', 'Gabriel', 'Carlos', 'Jacqueline', 'Pablo', 'Alexia', 'Fernando'];
echo 'Lista de nombres sin ordenar: ' . implode(', ', $names) . "\n";

$minusNames = array_map('strtolower', $names);     //Convierte los nombres en Minus para una comparacion efectiva
$sortedNames = insertionSort($minusNames);         //Ordena los nombres con el Insertion Sort
$sortedNames = array_map('ucfirst', $sortedNames); //Convierte los nombres a su forma original

echo 'Lista de nombres ordenada: ' . implode(', ', $sortedNames);
?>