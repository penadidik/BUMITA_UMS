<?php

foreach ($s as $key) {
    $nim=$key->nim;
    $se=$key->nama;
}

// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LAPORAN AKHIR MAHASISWA BUMITA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'UNIVERSITAS MUHAMMADIYAH SURAKARTA',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','',10);
// Tabel 
    $pdf->Cell(20,6,$nim,0,0);
    $pdf->Cell(85,6,$se,0,0);

$pdf->Output();
?>
