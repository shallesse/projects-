<?php

require("fpdf/fpdf.php");
$pdf= new FPDF();

$pdf->AddPage();

$pdf->SetFont("Arial","B","30");
$pdf->Cell(0,10,"The Burger Joint",1,1,"C");


$pdf->Cell(0,10,"Your Order Contains",2);
$pdf->write(5,"$patty");

$pdf->Output();

?>