<?php
/* a) Se debe mantener el nombre del trabajador que está uƟlizando la aplicación. 
b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista
c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese 
caso mostrar error */
session_start();

if (!isset($_SESSION["quantity_milk"])) { //Si no existe una cantidad de milk lo iniciamos en 0. Para que no siempre sea 0.
    $_SESSION["quantity_milk"] = 0;
}
if (!isset($_SESSION["quantity_softdrink"])) { //Si no existe una cantidad de soft drink lo iniciamos en 0. Para que no siempre sea 0.
    $_SESSION["quantity_softdrink"] = 0;
}
// ---------------------------------------------------------------------------------------------

if (!isset($_SESSION["name"])) { // Si no existe un name.
    $_SESSION["name"] = ''; // Dejamos el campo vacío.
} else if (isset($_POST["name"]) && $_POST["name"] !== '') { //En caso de que se haya enviado un valor diferente a uno vacío
    $_SESSION["name"] = $_POST["name"]; //SESSION name cambia a ese valor y se mantiene
}

// =============================================================================================
if (isset($_POST["add"])) {
    if (isset($_POST["product"]) && isset($_POST["quantity"])) {
        if (isset($_POST["product"]) && $_POST["product"] == 'milk') {
            $_SESSION["quantity_milk"] += $_POST["quantity"];
            // --------------------------------------------------------------
        }else if (isset($_POST["product"]) && $_POST["product"] == 'soft_drink') {
            $_SESSION["quantity_softdrink"] += $_POST["quantity"];
            // --------------------------------------------------------------
        }
    }
}else if (isset($_POST["remove"])) {
    if (isset($_POST["product"]) && isset($_POST["quantity"])) {
        if (isset($_POST["product"]) && $_POST["product"] == 'milk') {
            $_SESSION['quantity_milk'] -= $_POST['quantity'];

            if ($_SESSION["quantity_milk"] < 0) {
                $_SESSION["quantity_milk"] = 'Error, no puedes quitar menos unidades de las posibles.';
            }
            // -------------------------------------------------------------------
        }else if (isset($_POST["product"]) && $_POST["product"] == 'soft drink') {
            $_SESSION['quantity_milk'] -= $_POST['quantity'];

            if ($_SESSION["quantity_softdrink"] < 0) {
                $_SESSION["quantity_softdrink"] = 'Error, no puedes quitar menos unidades de las posibles.';
            }
            // -------------------------------------------------------------------
        }
    }
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
    <form action="exerciciSession01.php" method="post">
        <h1>Supermarket management</h1>
        Worker name:<input type="text" name="name" required>
        <h2>Choose product:</h2>
        <select name="product">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft drink</option>
        </select>
        <h2>Product quantity:</h2>
        <input type="number" name="quantity" required>
        <br><br>
        <input type="submit" name="add" value="add">
        <input type="submit" name="remove" value="remove">
        <input type="reset" name="reset" value="reset">
    </form>
    <h3>Inventary:</h3>
    <p>Worker: <?php echo $_SESSION["name"]?></p>
    <p>Units milk: <?php echo $_SESSION["quantity_milk"] ?></p>
    <p>Units soft drink: <?php echo $_SESSION["quantity_softdrink"] ?></p>
</body>
</html>