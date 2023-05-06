<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 - Spielberg</title>
</head>
<body>
    <h2>Calculamos el sueldo neto</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Importe Total Vendido del Mes (en S/.):</label>
        <input type="number" name="importe" required><br><br>
        <label>Cantidad de Hijos:</label>
        <input type="number" name="hijos" required><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $importe = $_POST['importe'];
        $hijos = $_POST['hijos'];

        $sueldo_basico = 600;
        $comision = $importe * 0.075;

        $bonificacion = $hijos * 50;
        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
        $descuento = $sueldo_bruto * 0.11;

        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "<h3>Resultados:</h3>";
        echo "Comisión: S/. " . $comision . "<br>";
        echo "Bonificación: S/. " . $bonificacion . "<br>";
        echo "Sueldo Bruto: S/. " . $sueldo_bruto . "<br>";
        echo "Descuento: S/. " . $descuento . "<br>";
        echo "Sueldo Neto: S/. " . $sueldo_neto . "<br>";
    }
    ?>
</body>
</html>
