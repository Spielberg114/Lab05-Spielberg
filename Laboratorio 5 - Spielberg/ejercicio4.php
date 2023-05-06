<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 04 - Spielberg</title>
</head>
<body>
    <h2>Cálculo de Importe y Descuento</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Precio del Cono de CD (en S/.):</label>
        <input type="number" step="0.01" name="precio" required><br><br>
        <label>Cantidad de Conos de CD Adquiridos:</label>
        <input type="number" name="cantidad" required><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $importe_compra = $precio * $cantidad;
        $descuento1 = $importe_compra * 0.05;
        $descuento2 = ($importe_compra - $descuento1) * 0.05;
        $descuento_total = $descuento1 + $descuento2;
        $importe_pagar = $importe_compra - $descuento_total;

        echo "<h3>Resultados:</h3>";
        echo "Importe de la Compra: S/. " . $importe_compra . "<br>";
        echo "Importe del Descuento Total: S/. " . $descuento_total . "<br>";
        echo "Importe a Pagar: S/. " . $importe_pagar . "<br>";
    }
    ?>
</body>
</html>