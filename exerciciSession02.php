<?php
// Crea un php con un array inicial con 3 valores numéricos. 
// a) Crea un formulario que permita modificar el valor en una posición en concreto. 
// b) Consigue que se mantenga las modificaciones en el array. 
// c) Añade un botón para calcular el valor medio. 
session_start();
if (!isset($_SESSION["valores"])) {
    $array = array("10","20","30");
    $_SESSION["valores"] = $array;
}

if (isset($_POST["position"]) && isset($_POST["value"])) {
    $position = $_POST["position"];
    $value = $_POST["value"];
    $_SESSION["valores"][$position] = $value;
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
</body>
</html>