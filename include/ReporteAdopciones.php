<?php
require('../fpdf185/fpdf.php');
require('./Conexion.php');

$pdf = new FPDF();
$pdf->AddPage();    //Agregar una pagina
$pdf->SetFont('Arial', 'B', 14);    //Letra Arial, negrita (Bold), tam. 20

/////////////////////////////////////////////////////////////////////////////////
// $pdf->Image('videoteca.jpg',5,8,15);
$pdf->Cell(80, 15, 'Lista de Mascotas Adoptadas', 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, '_____________________________________', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Nombre Mascota          Adoptado por          Fecha de Adopcion', 0, 1);

$pdf->SetFont('Arial', '', 10);
$result = mysqli_query($db, "SELECT * FROM adopciones");

while ($row = mysqli_fetch_array($result)) {
    $mascotaID = $row['mascotaID'];
    $usuarioID = $row['usuarioID'];
    $fecha= $row['fecha'];

    $rowU = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM usuarios WHERE id=$usuarioID"));
    $rowM = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM mascotas WHERE id=$mascotaID"));
    $nombreU = $rowU['nombre'];
    $apellidoU = $rowU['apellido'];
    $nombreM = $rowM['nombre'];
    $pdf->Cell(0, 10,'           '. $nombreM . '                         ' . $nombreU . ' ' . $apellidoU . '                       '.$fecha, 0, 1);
}


$pdf->SetTextColor(0, 0, 255);
$pdf->SetFont('', 'U');
$pdf->Write(5, 'GitHub', 'https://github.com/MarcoHdezH');
$pdf->Output();
