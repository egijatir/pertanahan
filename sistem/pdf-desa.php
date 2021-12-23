
<?php

require('../assets/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();

$pdf->SetFont('Times','B',19);
$pdf->Cell(0,7,'Manajemen Data Desa/Kelurahan',0,1,'C');

$pdf->Cell(13,8,'',0,1);

$pdf->SetFont('Times','b',14);

$pdf->Cell(7,6,'No',1,0,'C');
$pdf->Cell(60,6,'Kode Desa/Kelurahan',1,0,'C');
$pdf->Cell(60,6,'Nama Desa/Kelurahan',1,0,'C');
$pdf->Cell(60,6,'Kecamatan',1,1,'C');

$pdf->SetFont('Times','',12);

//Membuat Koneksi ke database akademik
$servername = "localhost";
$database = "pertanahan";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

$no=1;
$jk='';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($koneksi, "select * from desa order by id_desa asc");
while ($data = mysqli_fetch_array($hasil)){
   
    $pdf->Cell(7,6,$no,1,0);
    $pdf->Cell(60,6,$data['kode_desa'],1,0,'C');
    $pdf->Cell(60,6,$data['nama_desa'],1,0,'L');
    $pdf->Cell(60,6,$data['kecamatan'],1,1,'L');
    $no++;
}

$pdf->Output();
?>