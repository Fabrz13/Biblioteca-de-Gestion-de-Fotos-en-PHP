<?php
include_once("conexion.php");

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (!empty($_FILES['foto']['tmp_name'])) {
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $sql = "UPDATE `biblioteca` SET descripcion='$descripcion', foto='$foto' WHERE id='$id'";
    } else {
        $sql = "UPDATE `biblioteca` SET descripcion='$descripcion' WHERE id='$id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "foto actualizada con éxito.";
    } else {
        echo "Error al actualizar la foto: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php"); // Redirige de vuelta a la tabla
    exit();
}
?>
