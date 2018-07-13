<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',15);
$pdf->Cell(200,5,'NATIONAL PRODUCTIVITY COUNCIL',0,2,'C');
$pdf->Ln(3);
$pdf->Cell(200,5,'Training Evaluation and Feedback Form',0,2,'C');
//ProgrammeName
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Programme Name :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$nameofprogramme);
$pdf->Ln(10);

//ProgrammeCoordinator
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Programme Coordinator :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$nameofcoordinator);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',18);
$pdf->Ln(30);
$pdf->Cell(100,10,'PERSONAL INFORMATION',1,0,'C');
$pdf->Ln(2);
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

//Email
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,50,'Email :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,50,$email);

$pdf->SetFont('Arial','B',18);
$pdf->Ln(40);
$pdf->Cell(100,10,'FEEDBACK',1,0,'C');
$pdf->Ln(3);
//S1
$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,5,'1) To what extent is this programme useful to you in your job or personal growth?',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,5,'Ans : ' . $s1);
$pdf->Ln(2);
//S2
$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,5,'2) How far have you been benefitted from interaction with the fellow participants?',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,5,'Ans : ' . $s2);
$pdf->Ln(2);
//S3
$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,5,'3) How was the quality and utility of course material and lecture notes circulated?',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,5,'Ans : ' . $s3);
$pdf->Ln(2);
//S4
$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,5,'4) What was the level of learning outcome of this program?',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,5,'Ans : ' . $s3);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,5,'5) Type of your organization?',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,5,'Ans : ' . $type);
$pdf->Ln(2);

$pdf->SetFont('Arial','B',14);
$pdf->Ln(20);
$pdf->MultiCell(200,5,'6) Your operational level?',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,5,'Ans : ' . $level);
$pdf->Ln(30);


$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'7(i) Evaluate the topics of the programme');
$pdf->Ln(20);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,10,'Topic found useful :');
$pdf->SetFont('Arial','',12);
$pdf->Ln(10);
$pdf->MultiCell(200,7,$topicuseful,0,'L',false);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,10,'Topic Not found useful :');
$pdf->SetFont('Arial','',12);
$pdf->Ln(10);
$pdf->MultiCell(200,7,$topicnotuseful,0,'L',false);
$pdf->Ln(20);

$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'7(ii) Evaluate the faculty of the programme');
$pdf->Ln(30);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,10,'Faculty Rating :');
$pdf->Ln(8);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$faculty1 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$facultyrating1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$faculty2 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$facultyrating2);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$faculty3 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$facultyrating3);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$faculty4 . ' :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$facultyrating4);
$pdf->Ln(10);

$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(200,7,"8) To what extent are you satisfied with the quality of the following (only if applicable)",0,'L',false);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,20,'A) Accommodation :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$sa);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,20,'B) Food :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$sb);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,20,'C) Room Service & hotel facilities :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$sc);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,20,'D) Folder & writing material :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$sd);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,20,'E) Administrative arrangement of NPC :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$se);
$pdf->Ln(20);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(100,20,'9) Whether Audio-visual aids were used? :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$s6);
$pdf->Ln(10);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(100,20,'10) Your overall impression of the course :');
$pdf->SetFont('Arial','',10);
$pdf->Cell(100,20,$s7);


$pdf->Ln(30);
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(200,7,'11) Extra Remark',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(200,7,'Ans : ' . $extra,0,'L',false);
$pdf->Ln(15);

$pdf->SetFont('Arial','B',14);
$pdf->Ln(15);
$pdf->MultiCell(200,7,'12) Any new learning and take away from the program',0,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(200,7,'Ans : ' . $remark,0,'L',false);
$pdf->Ln(2);





$target = 'FeedbackForms/'.$name.'('.$nameofprogramme.'__'.$nameofcoordinator.')'.'.pdf';
$pdf->Output($target,'F'); 
?>