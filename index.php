<?php
    include_once("conexion.php");
    include_once("head.php");
?>
<h1><center>Biblioteca de Foto</center></h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">N° foto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Crear conexión
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Comprobar conexión
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM `biblioteca`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // Salida de datos por cada fila
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>" . $row["id"] . "</th>";
                            echo "<td>" . $row["descripcion"] . "</td>";
                            echo "<td><img height='100px' src='data:image/jpg;base64," . base64_encode($row['foto']) . "'></td>";
                            echo "<td>
                                <a href='editar_foto.php?id=" . $row["id"] . "' class='btn btn-warning'>Editar</a>
                                <a href='#' onclick='confirmarEliminacion(\"borrar_foto.php?id=" . $row["id"] . "\")' class='btn btn-danger'>Borrar</a>
                              </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No hay resultados</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="formulario_foto.php" class="registrar">
        <button class="btn btn-outline-primary"><i class="bi bi-person-plus"></i> Añadir</button>
        <form method="POST" action="exportar_foto.php">
        <button type="submit" name="exportar" class="btn btn-success">Exportar a PDF</button>
        </form>
    </a>
</div>

<!-- Modal de confirmación para eliminar -->
<div class="modal fade" id="confirmarModal" tabindex="-1" aria-labelledby="confirmarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmarModalLabel">Confirmación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro de que desea eliminar esta foto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="#" id="eliminarConfirmado" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>

<script>
function confirmarEliminacion(url) {
    var modal = new bootstrap.Modal(document.getElementById('confirmarModal'));
    document.getElementById('eliminarConfirmado').setAttribute('href', url);
    modal.show();
}
</script>

