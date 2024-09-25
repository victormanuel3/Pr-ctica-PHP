<?php
// 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
// variables y los resultados de sus operaciones. 
echo "1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las variables y los resultados de sus operaciones.<br><br>";
$num1 = 56;
$num2 = 33;
echo "Primer número: $num1<br>";
echo "Segundo número: $num2<br>";
// Operaciones
$division = $num1 / $num2;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
// Resultados
echo "<br>La suma de $num1 + $num2 es $suma";
echo "<br>La resta de $num1 - $num2 es $resta";
echo "<br>La division de $num2 + $num1 es $division";

//2. Muestra cuál es mayor, cuál menor o si son iguales.
echo "<br><br>2. Muestra cuál es mayor, cuál menor o si son iguales.<br><br>";

if ($num1 > $num2) {
    echo "El número $num1 es mayor que el número $num2.";
} else if ($num1 < $num2) {
    echo "El número $num1 es menor que el número $num2.";
} else {
    echo "Ambos números son iguales.";
}

//3. Si las dos variables son valores superiores a 1,
    //a. calcula el área del triángulo con base y altura igual a los valores de las variables. 
    echo "<br><br>3. Si las dos variables son valores superiores a 1,<br>
    a. calcula el área del triángulo con base y altura igual a los valores de las variables.<br><br>";

    if  ($num1 > 1 && $num2 > 1) {
        $area = $num1 * $num2 / 2;
        echo "El área del triángulo es $area";
    }

// ---------------------------------------------------------------------------------------------------