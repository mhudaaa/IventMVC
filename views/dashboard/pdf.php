<?php 
ob_start();
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->setPaper('A4', 'potrait');

$fileUrl = "http://localhost/mvc/dashboard/pesertaDownload/1";

//get file content after the script is server-side interpreted
$fileContent = file_get_contents($fileUrl) ;

//load stored html string
$dompdf->load_html($fileContent);
$dompdf->render();
$dompdf->stream("peserta");