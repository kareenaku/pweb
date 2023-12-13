<?php
// memanggil library FPDF
require('fpdf.php');
// instance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan

$width = $pdf->GetPageWidth();
//mendapat lebar
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(0,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI W',0,1,'C'); // Menggunakan lebar 0
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C'); // Menggunakan lebar 0

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
// $pdf->Cell(20,6,'FOTO',1,0);
$pdf->Cell(20,6,'NIS',1,0);
$pdf->Cell(85,6,'NAMA MAHASISWA',1,0);  // Sesuaikan lebar
$pdf->Cell(33,6,'JENIS KELAMIN',1,0);
$pdf->Cell(27,6,'TELEPON',1,0);
$pdf->Cell(25,6,'ALAMAT',1,1);

$pdf->SetFont('Arial','',10);

// Menggunakan PDO untuk koneksi
include 'koneksi.php';
$mahasiswa = $pdo->query("SELECT * FROM siswa");
while ($row = $mahasiswa->fetch(PDO::FETCH_ASSOC)) {
    // $pdf->Cell(20,6,$row['foto'],1,0);
    $pdf->Cell(20,6,$row['nis'],1,0);
    $pdf->Cell(85,6,$row['nama'],1,0);  // Sesuaikan lebar
    $pdf->Cell(33,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(27,6,$row['telp'],1,0); // Ganti 'telp' dengan kolom yang sesuai
    $pdf->Cell(25,6,$row['alamat'],1,1); // Sesuaikan lebar
}

$pdf->Output();
?>
