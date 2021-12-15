<?php 
include 'koneksi.php';
$id_desa = $_GET['id_desa'];
$id         = $_GET['id'];
$sql1       = "DELETE FROM desa WHERE id_desa='$id_desa'";
$q1         = mysqli_query($koneksi,$sql1);
if($q1){
    $sukses = "Berhasil hapus data";
}else{
    $error  = "Gagal melakukan delete data";
}

header("location:../page/desa.php?pesan=hapus");
?>