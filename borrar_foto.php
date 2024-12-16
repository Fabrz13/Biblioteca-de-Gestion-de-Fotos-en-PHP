<?php
include_once("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Eliminar foto de la base de datos
    $sql = "DELETE FROM biblioteca WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "foto eliminada exitosamente.";
    } else {
        echo "Error al eliminar la foto.";
    }

    $stmt->close();
    $conn->close();
    header("Location: index.php"); // Redirigir a la página principal
    exit;
}
?>
