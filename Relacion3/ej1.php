<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Multiplicación de Dos Números</title>
</head>
<body>
    <h1>Formulario de Multiplicación</h1>

    <?php
    //Realiza un programa que muestre un formulario para introducir dos números y luego muestre el resultado de su multiplicación.//

    if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if (is_numeric($numero1) && is_numeric($numero2)) {
            $resultado = $numero1 * $numero2;

            echo "<p>El resultado de la multiplicación de $numero1 y $numero2 es: $resultado</p>";
        } else {
            echo "<p>Por favor, ingrese números válidos.</p>";
        }
    }
    ?>
    
    <!--Formulario para introducir 2 números-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" required>

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" required>

        <input type="submit" value="Multiplicar">
    </form>
    </body>
</html>