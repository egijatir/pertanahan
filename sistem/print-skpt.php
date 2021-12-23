
<?php

require('../assets/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();

$pdf->SetFont('Times','B',19);
$pdf->Cell(0,7,'LAPORAN REKAPITULASI PENERBIT SKPT',0,1,'C');

$pdf->Cell(13,8,'',0,1);

$pdf->SetFont('Times','b',9);

$pdf->Cell(7,6,'No',1,0,'C');
$pdf->Cell(25,6,'Nomor Referal',1,0,'C');
$pdf->Cell(25,6,'Tanggal SKPT',1,0,'C');
$pdf->Cell(25,6,'Letak Tanah',1,0,'C');
$pdf->Cell(25,6,'Ukuran Tanah',1,0,'C');
$pdf->Cell(25,6,'Luas Tanah',1,0,'C');
$pdf->Cell(30,6,'Cara Peroleh Tanah',1,0,'C');
$pdf->Cell(28,6,'Penggunaan Tanah',1,1,'C');

$pdf->SetFont('Times','',10);

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
$hasil = mysqli_query($koneksi, "select * from skpt order by id_skpt asc");
while ($data = mysqli_fetch_array($hasil)){
    $pdf->Cell(7,6,$no,1,0,'C');
    $pdf->Cell(25,6,$data['no_reff'],1,0,'C');
    $pdf->Cell(25,6,$data['tahun_penguasaan'],1,0,'C');
    $pdf->Cell(25,6,$data['alamat_lokasi'],1,0,'C');
    $pdf->Cell(25,6,$data['ukuran_panjang'],1,0,'C');
    $pdf->Cell(25,6,$data['total_luas_tanah'],1,0,'C');
    $pdf->Cell(30,6,$data['cara_peroleh_tanah'],1,0,'C');
    $pdf->Cell(28,6,$data['penggunaan_tanah'],1,1,'C');
    $no++;
}

$pdf->Output();
?>