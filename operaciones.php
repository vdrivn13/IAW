<?php
session_start();

$a = isset($_SESSION['a']) ? $_SESSION['a'] : 0;
$b = isset($_SESSION['b']) ? $_SESSION['b'] : 0;

if (isset($_POST['operacion'])) {
    switch ($_POST['operacion']) {
        case 'incrementar_a':
            $a++;
            break;
        case 'decrementar_a':
            $a--;
            break;
        case 'incrementar_b':
            $b++;
            break;
        case 'decrementar_b':
            $b--;
            break;
        case 'borrar_sesion':
            session_destroy();
            header("Location: operaciones.php");
            break;
    }
}

$_SESSION['a'] = $a;
$_SESSION['b'] = $b;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Operaciones en Sesión</title>
</head>
<body>
    <p>Valor de a: <?php echo $a; ?></p>
    <p>Valor de b: <?php echo $b; ?></p>

    <form action="operaciones.php" method="post">
        <select name="operacion">
            <option value="incrementar_a">Incrementar a</option>
            <option value="decrementar_a">Decrementar a</option>
            <option value="incrementar_b">Incrementar b</option>
            <option value="decrementar_b">Decrementar b</option>
            <option value="borrar_sesion">Borrar Sesión</option>
        </select>
        <input type="submit" value="Realizar Operación">
    </form>
</body>
</html>