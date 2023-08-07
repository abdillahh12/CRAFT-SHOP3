<?php 
require 'koneksi.php';

require ('fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(300,7, 'DATA PEMESANAN BARANG',0,1,'C');
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(8,8,'',0,1);

$pdf->SetFont('Arial','B','7');
$pdf->Cell(10,9,'NO',1,0);
$pdf->Cell(35,9,'NAMA PEMBELI',1,0);
$pdf->Cell(30,9,'NO HP PEMBELI',1,0);
$pdf->Cell(40,9,'ALAMAT PEMBELI',1,0);
$pdf->Cell(30,9,'PESANAN PEMBELI',1,0);
$pdf->Cell(30,9,'HARGA BARANG',1,0);
$pdf->Cell(30,9,'JUMLAH PESANAN',1,0);
$pdf->Cell(30,9,'TOTAL JUMLAH',1,0);
$pdf->Cell(31,9,'TANGGAL PEMESANAN',1,1);

$pdf->SetFont('Arial','',8);

$result = mysqli_query($connect, "SELECT * FROM pembeli");
while ($row = mysqli_fetch_assoc($result)){
    // $pdf->Cell(8,8,'',0,1);
    $pdf->Cell(10,9,$row['id'],1,0);
    $pdf->Cell(35,9,$row['nama_pelanggan'],1,0);
    $pdf->Cell(30,9,$row['no_hp'],1,0);
    $pdf->Cell(40,9,$row['alamat'],1,0);
    $pdf->Cell(30,9,$row['pesanan'],1,0);
    $pdf->Cell(30,9,$row["harga_barang"],1,0);
    $pdf->Cell(30,9,$row['jumlah_pesanan'],1,0);
    $pdf->Cell(30,9,$row["total_jumlah"],1,0);
    $pdf->Cell(31,9,$row['tanggal_pemesanan'],1,1);
}

$pdf->Output();




?>