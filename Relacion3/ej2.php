<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Euros a Dólares</title>
</head>
<body>
    <h1>Conversor de Euros a Dólares</h1>

    <?php
    //Realiza un conversor de euros a dólares. Ahora la cantidad en euros que se quiere convertir se deberá introducir por un formulario.//
    if (isset($_POST["cantidadEuros"])) {
        $cantidadEuros = $_POST["cantidadEuros"];

        if (is_numeric($cantidadEuros)) {
            $tipoCambio = 1.18;

            $cantidadDolares = $cantidadEuros * $tipoCambio;

            echo "<p>$cantidadEuros euros son aproximadamente $cantidadDolares dólares (a un tipo de cambio de $tipoCambio).</p>";
        } else {
            echo "<p>Por favor, ingrese una cantidad válida.</p>";
        }
    }
    ?>
    <!-- Formulario para introducir la cantidad en euros -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="cantidadEuros">Cantidad en Euros:</label>
        <input type="text" name="cantidadEuros" required>

        <input type="submit" value="Convertir a Dólares">

</body>
</html>