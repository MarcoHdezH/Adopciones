<?php
   require ('../fpdf185/fpdf.php');  
   $pdf=new FPDF();	
   $pdf->AddPage();	//Agregar una pagina
   $pdf->SetFont('Arial','B',14);	//Letra Arial, negrita (Bold), tam. 20
     
//    $pdf->Image('videoteca.jpg',5,8,15);
   $pdf->Cell(80,15,'        Videoteca',0,1);
   
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(0,10,'ID       Titulo     Director    Actor',0,1);
   $pdf->Cell(0,10,'_____________________________________',0,1); 
   $pdf->SetFont('Arial','',10);	
   
  $pdf->SetTextColor(0,0,255);
  $pdf->SetFont('','U'); 
  $pdf->Write(5,'GitHub','https://github.com/MarcoHdezH');
  $pdf->Output();
?>
