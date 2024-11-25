<?php
/* Escribe un programa que ordene una lista de números de forma descendente utilizando el algoritmo Bubble Sort.
La lista puede contener duplicados y valores negativos. Asegúrate de manejar estos casos y muestra la lista antes 
y después de aplicar el algoritmo. */

function bubble($array) {

    $longitud = count($array); //Obtiene la longitud del array
    $intercambio = false;      //Variable que verifica si existen intercambios en el algoritmo

    do {
        $intercambio = false; //Se inia $intercambio = false en cada iteracion

        for($i = 0; $i < $longitud - 1; $i++) {

            if($array[$i + 1] > $array[$i]) { //Si la posicion siguiente es mayor a la posicion actual -->
                $variable = $array[$i + 1];   //Se guarda la posicion siguiente en una variable de apoyo -->
                $array[$i + 1] = $array[$i];  //Aqui se hace el intercambio, donde la posicion siguiente toma el lugar de la actual -->
                $array[$i] = $variable;       //Se finaliza el traslado, donde la posicion actual pasa a estar en la siguiente.

                $intercambio = true;  //Si hubo un intercambio, se pasa $intercambio = true, para ser detectada por el do-while
            }                         //Y repetir el proceso si aun hay que seguir ordenando.
        }
        $longitud--;      //Por cada iteracion, se disminuye la longitud del array, esto para no contar en el ordenamiento al elemento ya ordenado
    
    }while($intercambio); //do-while que se activa al percibir intercambios. Al ya no haber, se detiene

    return $array;        //Devolucion del array ordenado
}

//Ejemplo de uso
$numero = [1,4,2,5,7,7,7,8,-1];
echo "Lista original: " . implode(",", $numero) . "\n";
echo "Lista ordenada: " . implode(",", bubble($numero));
?>

