
<?php

session_start();
require('mysql_table.php');

  
class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','U',28);
	//$this->Cell(0,6,'Final Results',0,1,'C');
	$this->Ln(10);
	//$this->SetTextColor(242, 154, 0);
	//Ensure table header is output
	parent::Header();
}

function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().' / (Online Exam & Result System)',0,0,'C');
}


}

//Connect to database
mysql_connect('localhost','root','');
mysql_select_db('online_exam');

$pdf=new PDF();
$pdf->AddPage();
$pdf->Cell(0,6,'Final Results',0,1,'C');
$pdf->Ln(10);
//$pdf->Image('bg.jpg',20,100,-299);
//$pdf->SetXY(170, 19);
// Now we display our page number using the Cell function.
//$pdf->Cell(1, 1, 'Page ' . $pdf->PageNo(), 0, 1);
//$pdf->SetFillColor(0, 0, 0);
$pdf->SetLineWidth(1);

//$pdf->SetTextColor(255, 255, 255);
//$pdf->Image('admin/img/AUST.jpg', 100, 60, 100, 80);
//$pdf->SetTextColor(242, 122, 0);
//First table: put all columns automatically
$pdf->Table('SELECT * from quiz_takers order by `quiz_takers_id`');





$pdf->AddPage();
$pdf->SetFont('Arial','U',28);
$pdf->Cell(0,6,'Final Results According To ID',0,1,'C');
$pdf->Ln(10);
//$pdf->SetTextColor(242, 122, 0);
$pdf->SetLineWidth(1);
//$pdf->Image('pdf/bg.jpg', 100, 60, 100, 80);
//$pdf->Cell(1, 1, 'Page ' . $pdf->PageNo(), 0, 1);
//$pdf->SetFillColor(0, 0, 0);
//$pdf->SetAutoPageBreak(true, 0);
$pdf->AddCol('student_id',40,'Student Id','C');
$pdf->AddCol('percentage',40,'Percentage(%)');
$pdf->AddCol('date_time',40,'Date & Time','C');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select student_id,  percentage, date_time from quiz_takers ORDER BY student_id ',$prop);





$pdf->AddPage();
//$pdf->SetLineWidth(1);
$pdf->SetFont('Arial','U',28);
$pdf->Cell(0,6,'Rank List',0,1,'C');
$pdf->Ln(10);
$pdf->AddCol('student_id',40,'Student Id','C');
$pdf->AddCol('percentage',40,'Percentage(%)');

$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select * from quiz_takers ORDER BY  percentage DESC',$prop);


$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");



?>

