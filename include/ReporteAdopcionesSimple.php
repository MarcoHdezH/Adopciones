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
$pdf->Cell(0, 10, 'Nombre Mascota          Estado Adopcion', 0, 1);

$pdf->SetFont('Arial', '', 10);
$result = mysqli_query($db, "SELECT * FROM mascotas");

while ($row = mysqli_fetch_array($result)) {
    $estado = intval($row['estado']);
    $nombre= $row['nombre'];

    if($estado==0){
        $pdf->Cell(0, 10,'           '.$nombre.'                  Disponible', 0, 1);
    }else{
        $pdf->Cell(0, 10,'           '.$nombre.'                  Adoptado', 0, 1);
    }

}


$pdf->SetTextColor(0, 0, 255);
$pdf->SetFont('', 'U');
$pdf->Write(5, 'GitHub', 'https://github.com/MarcoHdezH');
$pdf->Output();