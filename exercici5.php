<?php
//1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. 
echo "1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.<br><br>";

//2. Se repita la operación hasta que el total de valores sumados sea superior a 100.
echo "2. Se repita la operación hasta que el total de valores sumados sea superior a 100.<br><br>";

$superior = 0;
$contadorPares = 0;
$contadorImpares = 0;

while ($superior <= 100) {
    $aleatorio = rand(0, 20); 
    echo $aleatorio . "<br>";
    
    if ($aleatorio % 2 == 0) {
        $contadorPares++;
    } else {
        $contadorImpares++;
    }

    $superior += $aleatorio;
}

//3. Muestra la suma de los valores generados.
echo "<br><br>3. Muestra la suma de los valores generados.<br><br>";

echo "Valores sumados = $superior<br><br>";

//4. Muestra el total de números pares e impares generados. 
echo "4. Muestra el total de números pares e impares generados.<br><br>";

echo "El total de números pares es: $contadorPares<br>";
echo "El total de números pares es: $contadorImpares<br><br>";