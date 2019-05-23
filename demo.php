<?php
require('api/fpdf/fpdf.php');

class PDF extends FPDF {
	
	function Header(){
		$this->Image(apple-touch-icon-72-precomposed.png,10,6,20);
		$this->SetFont('Times','B',15);
		$this->Cell(80);
		$this->Cell(60,10,'Document Report',1,0,'C');
		$this->Lm(20);
	}
	
	function Chapter(){

	}
	
	function Mybody(){

	}
	
	function Layout(){

	}
	
	function footer(){
		$this->Sety(-15);
		$this->SetFont('Arial','I',8)
		$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}
}
$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>