<?php
//1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente: 
$num1 = 73;
$num2 = 51;

//2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera con un bucle for. 
for ($i = 0; $i < $num1; $i++) {
    if ($i % 2 == 0) {
        echo $i;    
    }
}

//3.  Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while. 
while ($num2 >= 0) {
    echo $num2." ";
    $num2--;
}

//4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle do/while. 
//a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez el valor de la primera variable.

if ($num2 < $num1) {
    echo $num1;
} else {
    do {
        echo $num1." ";
        $num1++;
    } while ($num1 <= $num2);
}

//HOLA