<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 03 - Spielberg</title>
</head>
<body>
    <h2>Importe y Descuento</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Tarifa de Alquiler por Día (en S/.):</label>
        <input type="number" step="0.01" name="tarifa" required><br><br>
        <label>Número de Días de Alquiler:</label>
        <input type="number" name="dias" required><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tarifa = $_POST['tarifa'];
        $dias = $_POST['dias'];

        $importe_bruto = $tarifa * $dias;
        $descuento = $importe_bruto * 0.15;
        $importe_neto = $importe_bruto - $descuento;
        $lapiceros_obsequio = $dias * 3;

        echo "<h3>Resultados:</h3>";
        echo "Importe Bruto: S/. " . $importe_bruto . "<br>";
        echo "Importe del Descuento: S/. " . $descuento . "<br>";
        echo "Importe Neto a Pagar: S/. " . $importe_neto . "<br>";
        echo "Lapiceros de Obsequio: " . $lapiceros_obsequio . "<br>";
    }
    ?>
</body>
</html>