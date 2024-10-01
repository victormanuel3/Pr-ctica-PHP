<?php
//1) Crea un array asociaƟvo con los siguientes datos y claves. 
//nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
//Muestra los valores del array anterior uƟlizando foreach.
echo "1) Crea un array asociaƟvo con los siguientes datos y claves. nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona. Muestra los valores del array anterior uƟlizando foreach.<br><br>";

$array = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => "23", "ciudad" => "Barcelona");

$c = 1;
foreach ($array as $y) {
    echo "dato ".$c++."º: $y<br>";
}

//2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando foreach. 
echo "//<br><br>2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando foreach.<br><br>";

foreach ($array as $x => $y) {
    echo "$x: $y<br>";
}

//3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
echo "<br><br>3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.<br><br>";

$array["edad"] = 24;
$c = 1;
foreach ($array as $y) {
    echo "dato ".$c++."º: $y<br>";
}

//4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump.
echo "<br><br>4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump.<br><br>";

unset($array["ciudad"]);
var_dump($array);

//5) Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto 
//$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su 
//información en orden descendente.
echo '<br><br>5) Crear un nuevo array con un valor separado por coma a partir de la cadena de texto 
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su 
información en orden descendente.<br><br>';

$letters = "a,b,c,d,e,f";
$arrayLetters = explode(",", $letters);
rsort($arrayLetters);

$c = 6;
foreach ($arrayLetters as $letter) {
    echo "letter ".$c--.": ".$letter."<br>";
}
//6) Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son 
//las siguientes:
//Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
//Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de 
//mayor a menor.
echo "<br><br>6) Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1. Guarda los datos en un array asociativo en el orden previo 
y muéstralos ordenados de mayor a menor.<br><br>";

$notas = array("Miguel" => "5","Luis" => "7","Marta" => "10","Isabel" => "8","Aitor" => "4","Pepe" => "1");
arsort($notas);

echo "Las notas de los estudiantes: ";

foreach ($notas as $a => $b) {
    echo " $a: $b ";
}

//7. Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los nombres de los alumnos cuya nota esté por encima de la media. 
echo "<br><br>7. Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los nombres de los alumnos cuya nota esté por encima de la media.<br><br>";

echo "Media de las notas: ";

$suma_notas = 0;
foreach ($notas as $n) {
    $suma_notas += $n;
}
$media = $suma_notas / (count($notas));
echo number_format($media, 2);

echo "<br><br>Alumnos con nota por encima de la media: <br>";

foreach ($notas as $a => $b) {
    if ($b > $media) {
        echo $a."<br>";
    }
}

//8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y 
//el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del 
//array.

echo "<br>8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y el nombre del mejor 
alumno de la clase. Deberá funcionar para cualquier valor del array.<br><br>";

$nota_mayor = 0;
$alumno = '';

foreach ($notas as $a => $b) {
    if ($b > $nota_mayor) {
        $nota_mayor = $b;
        $alumno = $a;
    }
}

echo "La nota más alta es $nota_mayor el mejor alumno es $alumno.";
