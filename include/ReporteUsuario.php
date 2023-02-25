<?php
   require ('../fpdf185/fpdf.php'); 
   require ('./Conexion.php');

   $pdf=new FPDF();	
   $pdf->AddPage();	//Agregar una pagina
   $pdf->SetFont('Arial','B',14);	//Letra Arial, negrita (Bold), tam. 20
   
   $nombre = $_REQUEST['Usuario'];
   $result = mysqli_query($db, "SELECT * FROM usuarios WHERE nombre='$nombre' ");
   $row = mysqli_fetch_array($result);
   $apellido = $row['apellido'];
   $telefono = $row['telefono'];
   $correo = $row['correo'];
   $Mensaje = "Nombre del Adoptante: $nombre $apellido";
   $MensajeTelefono="Telefono: $telefono";
   $MensajeCorreo="Correo Electronico: $correo";

   $id=$row['id'];
   $mascotas = mysqli_query($db, "SELECT * FROM adopciones WHERE usuarioID='$id' ");
   $Mensaje2 = "Numero de Mascotas Adoptadas: $mascotas->num_rows";

/////////////////////////////////////////////////////////////////////////////////
// $pdf->Image('videoteca.jpg',5,8,15);
   $pdf->Cell(80,15,'Reporte de Adopcion',0,1);
   
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(0,10,$Mensaje,0,1);
   $pdf->Cell(0,10,'_____________________________________',0,1);
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(80,15,'Datos del Adoptante:',0,1);
   $pdf->SetFont('Arial','',10);

   $pdf->Cell(0,10,$MensajeCorreo,0,1);
   $pdf->Cell(0,10,$MensajeTelefono,0,1);
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(0,10,'Mascotas Adoptadas: ',0,1);
   $pdf->SetFont('Arial','',10);

   while($row = mysqli_fetch_array($mascotas)) { 
      $id=$row["mascotaID"];
      $nombreMascota=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM mascotas WHERE id='$id' "));
      $name=$nombreMascota['nombre'];
      $pdf->Cell(0,10,$name,0,1);
   } 
   
   $pdf->Cell(0,10,$Mensaje2,0,1);
   

  $pdf->SetTextColor(0,0,255);
  $pdf->SetFont('','U'); 
  $pdf->Write(5,'GitHub','https://github.com/MarcoHdezH');
  $pdf->Output();
