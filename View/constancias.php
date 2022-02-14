<?php

date_default_timezone_set('America/Los_Angeles');


require "../fpdf/fpdf.php";
require "../Models/Conexion.php";
$sql="Select* from solicitudes";

$pdf = new FPDF("p","mm","letter");
$pdf->AddPage();
$pdf->SetFont("Arial","B",18);
$pdf->Cell(1,1,"CONSTANCIA Nro. 70",0,0,"C");
$pdf->Cell(4,5,"CONSTANCIA  Nro. 80",0,0,"C");


$pdf->Output();
