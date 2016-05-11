<?php

// required to load FPDI classes
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf('','','','',15,15,47,16,9,9);
$mpdf->SetImportUse();

$mpdf->SetDocTemplate('sample_logoheader2.pdf',1);	// 1|0 to continue after end of document or not - used on matching page numbers

//===================================================
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
//===================================================

$mpdf->RestartDocTemplate();

//===================================================
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
//===================================================


$mpdf->Output();