<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Data siswa',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(40,7,'NISN' ,1,0,'C');
$pdf->Cell(75,7,'Nama',1,0,'C');
$pdf->Cell(20,7,'absen',1,0,'C');
$pdf->Cell(40,7,'Kelas',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM siswa order by nama asc");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(40,6, $d['NISN'],1,0);
  $pdf->Cell(75,6, $d['Nama'],1,0);  
  $pdf->Cell(20,6, $d['absen'],1,0);  
  $pdf->Cell(40,6, $d['kelas'],1,1);
}
 
$pdf->Output();
 
?>