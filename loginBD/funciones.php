<?
function productoExiste($id)
            {
                global $conn;
                $query = "SELECT id FROM producto WHERE id = '$id'";
                $result = mysqli_query($conn, $query);
                return mysqli_num_rows($result) > 0;
            }
function darDeAltaproducto($conn, $id, $nombre, $descripcion, $precio) {
    $statement = $conn->prepare('INSERT INTO producto (id, nombre, descripcion, precio) VALUES (?, ?, ?, ?)');
    $statement->bind_param('ssss', $id, $nombre, $descripcion, $precio);
    $statement->execute();
}
function borrarproducto($conn, $idborrar) {
    $statement = $conn->prepare('DELETE FROM producto WHERE id = ?');
    $statement->bind_param('s', $idborrar);
    $statement->execute();
}
function modificarproducto($conn, $idnuevo, $nombrenuevo, $descripcionnuevo, $precionuevo, $idviejo) {
    $statement = $conn->prepare("UPDATE producto SET id = ?, nombre = ?, descripcion = ?, precio = ? WHERE id = ?");
    $statement->bind_param("sssss", $idnuevo, $nombrenuevo, $descripcionnuevo, $precionuevo, $idviejo);
    $statement->execute();
}
function existeId($conn, $id) {
    $statement = $conn->prepare('SELECT id FROM producto WHERE id = ?');
    $statement->bind_param('s', $id);
    $statement->execute();
    $tabla_dni = $statement->get_result();
    return $tabla_dni->num_rows > 0;
  }
?>