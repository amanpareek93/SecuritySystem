<?php
require("fpdf17/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',36);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>