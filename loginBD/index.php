<?php 

session_start(); 

require_once("funciones.php");

if(isset($_SESSION['usuario'])){ 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almacen</title>
</head>

<body>

  <div style="background-color: orange;">
    <div >
      <h1 >Almacen</h1>
      <h2>Gestión de productos de Almacen</h2>
<?php
// Conexión a la base de datos
$conn = mysqli_connect('db', 'root', 'test', 'almacen');



// borrar 
if (isset($_GET['accion']) && $_GET['accion'] == 'borrar') {
  $idborrar = $_GET['id'];
  borrarProducto($conn, $idborrar);
}

// insertar 
if (isset($_GET['accion']) && $_GET['accion'] == 'crear') {
  $id = $_GET['id'];
  $nombre = $_GET['nombre'];
  $descripcion = $_GET['descripcion'];
  $precio = $_GET['precio'];

  if (!productoExiste($id)) {
    dardealtaProducto($conn, $id, $nombre, $descripcion, $precio);
  } else {
      print("El id ya existe.");
  }
}


// modificar 
if (isset($_GET['accion']) && $_GET['accion'] == 'modificar') {
  $idnuevo = $_GET['id'];
  $nombrenuevo = $_GET['nombre'];
  $descripcionnuevo = $_GET['descripcion'];
  $precionuevo = $_GET['precio'];
  $idviejo = $_GET['idAntiguo'];
  modificarproducto($conn, $idnuevo, $nombrenuevo, $descripcionnuevo, $precionuevo, $idviejo);
}
// Listado
//Este listado se muestra siempre
//hacer llamada a BD 
$consulta;
?>

      <table >
        <tr>
          <th>id</th>
          <th>nombre</th>
          <th>descripcion</th>
          <th>precio</th>
          <th></th>
        </tr>

        <form action="index.php" method="GET">
          <tr>
            <td><input type="text" name="id"></td>
            <td><input type="text" name="nombre"></td>
            <td><input type="text" name="descripcion"></td>
            <td><input type="text" name="precio"></td>
            <input type="hidden" name="accion" value="crear">
            <td><input type="submit" value="Añadir"></td>
          </tr>
        </form>

        <?php
        $statement = $conn->stmt_init();
        $statement->prepare("SELECT * from producto");
        $statement->execute();
        $resultado = $statement->get_result();
        while ($registro = $resultado->fetch_assoc()) { 
        echo "<tr>
            <td>".$registro['id']." </td>
            <td>". $registro['nombre']." </td>
            <td>". $registro['descripcion']." </td>
            <td>". $registro['precio']." </td>
            <td>
              <a href=\"modificar.php?&id=". $registro['id'] ."&nombre=". $registro['nombre'] ."&descripcion=". $registro['descripcion'] . "&precio=". $registro['precio']." \">
                <button >Modificar</button>
              </a>
            </td>
            <td>
              <a href=\"index.php?accion=borrar&id=". $registro['id']."\">
                <button>
                  <img width='20px' src='papelera.png' >
                </button>
              </a>
            </td>
          </tr>";
        }
        ?>
      </table>
    </div>
  </div>

  <br>
  <a href="cerrarsesion.php"><button>Cerrar sesion</button> </a>
</body>

</html>
<?php 
} else{
  print 'No has iniciado sesion';
  print '<br>';
  
  print '<a href="login.php"><button>Volver al login</button> </a>';
    }
?>