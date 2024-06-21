<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Data pengumpulan',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(40,7,'Nama Siswa' ,1,0,'C');
$pdf->Cell(20,7,'No Absen',1,0,'C');
$pdf->Cell(20,7,'Nama Mapel',1,0,'C');
$pdf->Cell(60,7,'Nama Tugas',1,0,'C');
$pdf->Cell(30,7,'Tanggal',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM pengumpulan order by No_Absen asc");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(40,6, $d['Nama_Siswa'],1,0);
  $pdf->Cell(20,6, $d['No_Absen'],1,0);  
  $pdf->Cell(20,6, $d['Nama_Mapel'],1,0);  
  $pdf->Cell(60,6, $d['Nama_Tugas'],1,0);
  $pdf->Cell(30,6, $d['Tanggal_pengumpulan'],1,0);
}
 
$pdf->Output();
 
?>