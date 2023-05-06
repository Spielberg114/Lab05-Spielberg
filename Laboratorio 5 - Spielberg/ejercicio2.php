<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 02 - Spielberg</title>
</head>
<body>
    <h2>Precio y Descuento</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Precio Actual de la Gaseosa (en S/.):</label>
        <input type="number" step="0.01" name="precio" required><br><br>
        <label>Cantidad de Gaseosas Adquiridas:</label>
        <input type="number" name="cantidad" required><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $descuento_precio = $precio * 0.05;
        $nuevo_precio = $precio - $descuento_precio;

        $importe_compra = $nuevo_precio * $cantidad;

        $descuento = $importe_compra * 0.07;
        $importe_pagar = $importe_compra - $descuento;

        $obsequio = $cantidad * 2;

        echo "<h3>Resultados:</h3>";
        echo "Nuevo Precio de la Gaseosa: S/. " . $nuevo_precio . "<br>";
        echo "Importe de la Compra: S/. " . $importe_compra . "<br>";
        echo "Importe del Descuento: S/. " . $descuento . "<br>";
        echo "Importe a Pagar: S/. " . $importe_pagar . "<br>";
        echo "Obsequio: " . $obsequio . " caramelos<br>";
    }
    ?>
</body>
</html>