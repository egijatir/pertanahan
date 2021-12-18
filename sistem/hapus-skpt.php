<?php 
include 'koneksi.php';
$id_skpt = $_GET['id_skpt'];
$id         = $_GET['id'];
$sql1       = "DELETE FROM skpt WHERE id_skpt='$id_skpt'";
$q1         = mysqli_query($koneksi,$sql1);
if($q1){
    $sukses = "Berhasil hapus data";
}else{
    $error  = "Gagal melakukan delete data";
}

header("location:../page/skpt.php?pesan=hapus");
?>