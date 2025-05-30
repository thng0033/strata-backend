<?php
require 'vendor/autoload.php';
use TCPDF;

$pdf = new TCPDF();
$pdf->SetCreator('Strata Manager System');
$pdf->SetAuthor('Building Admin');
$pdf->SetTitle('Levy Notice');
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

$html = '
<h1 style="text-align:center;">Strata Management Levy Notice</h1>
<p><strong>Unit:</strong> 101</p>
<p><strong>Owner:</strong> John Doe</p>
<p><strong>Billing Period:</strong> Jan – Mar 2025</p>
<p><strong>Amount Due:</strong> $450.00</p>
<hr>
<p>Please make the payment before <strong>March 15, 2025</strong>.</p>
<p>Contact strata@building.com for enquiries.</p>
';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('levy_notice.pdf', 'I'); // 'I' means display in browser
?>
