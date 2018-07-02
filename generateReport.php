<?php
require('diag.php');

$pdf = new PDF_Diag();
$pdf->AddPage();

$data = array('Very Useful' => 20, 'Quite Useful' => 16, 'Of Limited Use' => 14, 'Not at all Useful' => 4);

//Pie chart
$pdf->SetFont('Arial', 'BIU', 12);
$pdf->Cell(0, 5, '1 - To what extent is this programme useful to you in your job or personal growth', 0, 1);
$pdf->Ln(8);

$pdf->SetFont('Arial', '', 10);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->Cell(30, 5, 'Very Useful:');
$pdf->Cell(15, 5, $data['Very Useful'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Quite Useful:');
$pdf->Cell(15, 5, $data['Quite Useful'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Of Limited Use:');
$pdf->Cell(15, 5, $data['Of Limited Use'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Not at all Useful:');
$pdf->Cell(15, 5, $data['Not at all Useful'], 0, 0, 'R');
$pdf->Ln();
$pdf->Ln(8);

$pdf->SetXY(90, $valY);
$col1=array(100,100,255);
$col2=array(255,100,100);
$col3=array(255,255,100);
$col4=array(200,200,200);
$pdf->PieChart(100, 35, $data, '%l (%p)', array($col1,$col2,$col3,$col4));
$pdf->SetXY($valX, $valY + 40);



$pdf->Output();
?>