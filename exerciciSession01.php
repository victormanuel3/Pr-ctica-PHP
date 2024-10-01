<?php
/* a) Se debe mantener el nombre del trabajador que está uƟlizando la aplicación. 
b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista
c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese 
caso mostrar error */

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
        Worker name:<input type="text" name="name">
        <h2>Choose product:</h2>
        <select name="product">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft drink</option>
        </select>
        <h2>Product quantity:</h2>
        <input type="number" name="quantity">
        <br><br>
        <button name="add">add</button>
        <button name="remove">remove</button>
        <button name="reset">reset</button>
    </form>
</body>
</html>