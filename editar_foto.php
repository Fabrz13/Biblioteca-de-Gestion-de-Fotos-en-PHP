<?php
include_once("conexion.php");
include_once("head.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtener registro
    $sql = "SELECT * FROM `biblioteca` WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<form action="actualizar_foto.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="mb-3">
        <label for="descripcion">Descripcion</label>
        <input class="form-control" name="descripcion" value="<?php echo $row['descripcion']; ?>">
    </div>
    <div class="mb-3">
        <label for="foto">Actualizar Foto</label>
        <input type="file" name="foto" class="form-control" required onchange="previewImage(event)">
        <img id="imagenPreview" src="#" alt="Previsualización" style="display: none; width: 100px; margin-top: 10px;">
    </div>
    <div class="col-12">
        <button name="actualizar" class="btn btn-primary" type="submit">Actualizar</button>
    </div>
</form>

<script>
// Previsualización de imagen antes de subirla
function previewImage(event) {
    var output = document.getElementById('imagenPreview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
}
</script>
