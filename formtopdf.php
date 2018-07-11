<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{

	function Header()
	{
	    $this->Image('npc.jpg',10,6,30);
	    $this->SetFont('Arial','B',15);
	    $this->Cell(65);
	    $this->Cell(80,10,'Feedback Form',1,0,'C');
	    $this->Ln(20);
	}

}

$pdf = new PDF();
$pdf->AddPage();


//ProgrammeName
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Programme Name :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$programme);
$pdf->Ln(10);

//Duration
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Duration :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$duration);
$pdf->Ln(10);

//ProgrammeCoordinator
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Programme Coordinator :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$coordinator);
$pdf->Ln(10);

//Name
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Name of Participant:');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$name);
$pdf->Ln(10);

//Designation
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Designation :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$designation);
$pdf->Ln(10);

//Organisation
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Name of the Organisation :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$organization);
$pdf->Ln(10);

//Contact
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Contact No. :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$mobile);
$pdf->Ln(10);

//S1
$pdf->SetFont('Arial','',14);
$pdf->Ln(20);
$pdf->MultiCell(200,7,'1) To what extent is this programme useful to you in your job or personal growth?',0,'L',false);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,20,'Ans : ' . $s1);
$pdf->Ln(2);
//S2
$pdf->SetFont('Arial','',14);
$pdf->Ln(20);
$pdf->MultiCell(200,7,'2) How far have you been benefitted from interaction with the fellow participants?',0,'L',false);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,20,'Ans : ' . $s2);
$pdf->Ln(2);
//S3
$pdf->SetFont('Arial','',14);
$pdf->Ln(20);
$pdf->MultiCell(200,7,'3) How was the quality and utility of course material and lecture notes circulated?',0,'L',false);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,20,'Ans : ' . $s3);
$pdf->Ln(2);


$pdf->SetFont('Arial','',14);
$pdf->Cell(80,50,'Topic found useful :');
$pdf->SetFont('Arial','',10);
$pdf->Ln(30);
$pdf->MultiCell(200,7,$topicuseful,0,'L',false);
$pdf->Ln(10);
$pdf->SetFont('Arial','',14);
$pdf->Cell(80,50,'Topic Not found useful :');
$pdf->SetFont('Arial','',10);
$pdf->Ln(30);
$pdf->MultiCell(200,7,$topicnotuseful,0,'L',false);
$pdf->Ln(10);


$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Faculty Rating :');
$pdf->Ln(8);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,50,$faculty1 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$facultyrating1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,50,$faculty2 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$facultyrating2);
$pdf->Ln(10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,50,$faculty3 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$facultyrating3);
$pdf->Ln(10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,50,$faculty4 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$facultyrating4);
$pdf->Ln(10);


$pdf->Ln(20);
$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Accommodation :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$sa);
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Food :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$sb);
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Room Service & hotel facilities :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$sc);
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Folder & writing material :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$sd);
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Administrative arrangement of NPC :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$se);
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Whether Audio-visual aids were used? :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$s6);
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->Cell(100,50,'Your overall impression of the course :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$s7);
$pdf->Ln(10);

$pdf->AddPage();
$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(200,7,'Extra Remark',0,'L',false);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(200,7,'Ans : ' . $extra,0,'L',false);
$pdf->Ln(2);


$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,7,'Any new learning and take away from the program',0,'L',false);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(200,7,'Ans : ' . $remark,0,'L',false);
$pdf->Ln(2);





$target = 'FeedbackForms/'.$name.'('.$progname.')'.'.pdf';
$pdf->Output($target,'F'); 
?>