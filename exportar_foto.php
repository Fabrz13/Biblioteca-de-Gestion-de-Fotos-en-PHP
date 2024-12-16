<?php
require_once __DIR__ . '/vendor/tecnickcom/tcpdf/tcpdf.php';

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar las fotos
$sql = "SELECT * FROM biblioteca";
$result = $conn->query($sql);

// Crear instancia de TCPDF
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Título
$pdf->Cell(0, 10, 'Repositorio Personal', 0, 1, 'C');
$pdf->Ln(5);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Mostrar cada registro
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->Cell(0, 10, 'ID: ' . $row['id'], 0, 1);
        $pdf->SetFont('helvetica', '', 10);
        $pdf->MultiCell(0, 10, 'Descripción: ' . $row['descripcion'], 0, 'L');
        $pdf->Ln(2); // Espacio adicional

        // Agregar imagen (ajustar tamaño y posición)
        if (!empty($row['foto'])) {
            $temp_image = tempnam(sys_get_temp_dir(), 'img') . '.jpg';
            file_put_contents($temp_image, $row['foto']);

            // Posicionar imagen centrada
            $pdf->Image($temp_image, $pdf->GetX() + 10, $pdf->GetY(), 40, 40, 'JPG'); // Ajustar dimensiones
            unlink($temp_image);

            $pdf->Ln(45); // Saltar la altura de la imagen
        }

        $pdf->Ln(5); // Espacio entre registros
    }
} else {
    $pdf->Cell(0, 10, 'No hay fotos disponibles.', 0, 1, 'C');
}

// Cerrar conexión
$conn->close();

// Generar el PDF para descarga
$pdf->Output('Biblioteca.pdf', 'D');
exit;
?>



