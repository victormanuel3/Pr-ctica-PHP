<?php
// Crea un php con un array inicial con 3 valores numéricos. 
// a) Crea un formulario que permita modificar el valor en una posición en concreto. 
// b) Consigue que se mantenga las modificaciones en el array. 
// c) Añade un botón para calcular el valor medio.

session_start();

$array = array("10","20","30"); //Creamos el array con los valores.
if (!isset($_SESSION["valores"])){ //Si aún no existe la variable SESSION de valores la creo para que así no se reinicien
    $_SESSION["valores"] = $array; //los valores a 10, 20, 30.
}

if (isset($_POST["modify"])) {   //Si le da al botón de Modificar.
    if (isset($_POST["position"]) && isset($_POST["value"])) { //Si existe la posición y el valor.
        $position = $_POST["position"]; 
        $value = $_POST["value"];
        $_SESSION["valores"][$position] = $value; //Busco la posición del array de la variable SESSION y añado el valor.
    }
}else if (isset($_POST["average"])) { //Si le da al botón de average.
    $suma_values = 0;
    foreach ($_SESSION["valores"] as $value) { //Hago un foreach y voy sumando cada valor.
        $suma_values += $value;
    }
    $_SESSION["media"] =  number_format($suma_values / count($_SESSION["valores"]), 2) ; //Media.
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Modify array saved in session</h1>
        <label>
            Position to modify:
            <select name="position">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </label>
        <br><br>
        <label>
            New value:
            <input type="number" name="value">
        </label>
        <br><br>
        <input type="submit" name="modify" value="Modify">
        <input type="submit" name="average" value="Average">
        <input type="reset" value="Reset">
    </form>
    <p>Current array:  
        <?php
            foreach ($_SESSION["valores"] as $value) {
                echo $value.", ";
            }
        ?> 
    </p>
    <p>
    <?php 
        if (isset($_SESSION["media"])) {
            echo "Average: ".$_SESSION["media"];
        }
    ?>  
    </p>
</body>
</html>