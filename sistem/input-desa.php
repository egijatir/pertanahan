<?php 
include 'koneksi.php';
if(isset($_POST['kirim'])){
    $id_desa    = $_POST['id_desa'];
    $kode_desa  = $_POST['kode_desa'];
    $nama_desa  = $_POST['nama_desa'];
    $kecamatan   = $_POST['kecamatan'];
    $kirim          = mysqli_query($koneksi, "INSERT INTO desa (id_desa, kode_desa,nama_desa , kecamatan) VALUES ('$id_desa','$kode_desa','$nama_desa','$kecamatan')");
  }
  header("location:../page/desa.php?pesan=berhasil");
  ?>
