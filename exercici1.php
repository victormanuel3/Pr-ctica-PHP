<?php

// 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
// variables y los resultados de sus operaciones. 
$num1 = 56;
$num2 = 33;
// Operaciones
$division = $num1 / $num2;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
// Resultados
echo "La suma de $num1 + $num2 es $suma";
echo "La resta de $num1 - $num2 es $resta";
echo "La division de $num2 + $num1 es $division";

//2. Muestra cuál es mayor, cuál menor o si son iguales.
if ($num1 > $num2) {
    echo "El número $num1 es mayor que el número $num2.";
} else if ($num1 < $num2) {
    echo "El número $num1 es menor que el número $num2.";
} else {
    echo "Ambos números son iguales.";
}
