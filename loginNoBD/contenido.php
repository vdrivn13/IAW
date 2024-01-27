<?
//aquí tendremos que iniciar sesión y comprobar que hay un username almacenado en la sesión
//si lo hay podemos mostrar el contenido privado
//en caso contracio usaremos la función header("Location: login.php"); para redirigir al usuario
//al login

session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: login.php");

} else {
    echo "Bienvenido " . $_SESSION['usuario'] . " a tu página privada.";
}
?>
<a href="cerrarsesion.php">cerrarsesion</a>