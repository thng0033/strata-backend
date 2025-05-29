<?php
require 'vendor/autoload.php';
use TCPDF;

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);
$pdf->Write(0, 'Levy Notice - Unit 101');
$pdf->Output('levy_notice.pdf', 'I');
?>