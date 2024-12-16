<?php
    include_once("conexion.php");
    include_once("head.php");
?>
<form action="registrar_foto.php" method="POST" enctype="multipart/form-data" id="formulario_foto">
    <div class="mb-3">
        <label for="id">N° foto</label>
        <input class="form-control" name="id" id="id" placeholder="Ingrese el N° foto" maxlength="10" required>
    </div>
    <div class="mb-3">
        <label for="descripcion">Descripcion</label>
        <input class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion de la foto" required>
    </div>
    <div class="mb-3">
        <label for="imagen">Seleccione una Foto</label>
        <input type="file" name="foto" id="foto" class="form-control" required onchange="previewImage(event)">
        <img id="imagenPreview" src="#" alt="Previsualización" style="display: none; width: 100px; margin-top: 10px;">
    </div>
    <div class="col-12">
        <button name="enviar" class="btn btn-primary" type="submit">Registrar</button>
    </div>
</form>

<script>
document.getElementById('formulario_foto').onsubmit = function(e) {
    // Validación en el lado del cliente
    var descripcion = document.getElementById("descripcion").value.trim();
    if (descripcion === "") {
        alert("Por favor ingrese una descripcion.");
        e.preventDefault(); // Detener el envío del formulario
        return false;
    }
};

// Previsualización de imagen antes de subirla
function previewImage(event) {
    var output = document.getElementById('imagenPreview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
}
</script>
