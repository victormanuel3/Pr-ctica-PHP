<?php
//1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado. 
$aleatorio = rand(1, 6);

//2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara opuesta. (1:5, 2:6, 3:4) 

echo "El valor del dado es: $aleatorio <br>";
switch ($aleatorio) {
    case 1: "uno <br> Su cara opuesta es 5";
        break;
    case 2: "dos <br> Su cara opuesta es 6";
        break;
    case 3: "tres <br> Su cara opuesta es 4";
        break;
    case 4: "cuatro <br> Su cara opuesta es 3";
        break;
    case 5: "cinco <br> Su cara opuesta es 1";
        break;
    case 6: "seis <br> Su cara opuesta es 2";
        break;
}
