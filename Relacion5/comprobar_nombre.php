<?php
session_start();

if(isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
    echo "Nombre: " . $_SESSION['nombre'];
} else {
    header("Location: index.php");
}
?>
