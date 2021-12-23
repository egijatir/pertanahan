<?php 
include 'koneksi.php';
if(isset($_POST['kirim'])){
    $id_skpt    = $_POST['id_skpt'];
    $nama_pemohon  = $_POST['nama_pemohon'];
    $nik = $_POST['nik'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tangal_lahir  = $_POST['tangal_lahir'];
    $alamat_pemohon  = $_POST['alamat_pemohon'];
    $pekerjaan  = $_POST['pekerjaan'];
    $dokumen = $_POST['dokumen'];
    $alamat_lokasi = $_POST['alamat_lokasi'];
    $rt_rw = $_POST['rt_rw'];
    $desa= $_POST['desa'];
    $penggunaan_tanah = $_POST['penggunaan_tanah'];
    $total_luas_tanah = $_POST['total_luas_tanah'];
    $ukuran_panjang = $_POST['ukuran_panjang'];
    $ukuran_lebar = $_POST['ukuran_lebar'];
    $tahun_penguasaan= $_POST['tahun_penguasaan'];
    $cara_peroleh_tanah= $_POST['cara_peroleh_tanah'];
    $latitud1 = $_POST['latitud1'];
    $latitud2 = $_POST['latitud2'];
    $latitud3 = $_POST['latitud3'];
    $latitud4 = $_POST['latitud4'];
    $longitud1= $_POST['longitud1'];
    $longitud2= $_POST['longitud2'];
    $longitud3= $_POST['longitud3'];
    $longitud4= $_POST['longitud4'];
    $kordinat= $_POST['kordinat'];
    $batas_utara = $_POST['batas_utara'];
    $batas_timur= $_POST['batas_timur'];
    $batas_barat= $_POST['batas_barat'];
    $batas_selatan= $_POST['batas_selatan'];
    $tgl_sekarang= $_POST['tgl_sekarang'];
    $no_ref= $_POST['no_reff'];
    $kirim          = mysqli_query($koneksi, "INSERT INTO skpt(`id_skpt`, `nama_pemohon`, `nik`, `tempat_lahir`, `tangal_lahir`, `alamat_pemohon`, `pekerjaan`, `dokumen`, `alamat_lokasi`, `rt_rw`, `desa`, `penggunaan_tanah`, `total_luas_tanah`, `ukuran_panjang`, `ukuran_lebar`, `tahun_penguasaan`, `cara_peroleh_tanah`, `latitud1`, `latitud2`, `latitud3`, `latitud4`, `longitud1`, `longitud2`, `longitud3`, `longitud4`, `kordinat`, `batas_utara`, `batas_timur`, `batas_selatan`, `batas_barat`, `no_reff`, `tgl_sekarang`) 
    VALUES ('$id_skpt','$nama_pemohon','$nik','$tempat_lahir','$tangal_lahir','$alamat_pemohon','$pekerjaan','$dokumen','$alamat_lokasi','$rt_rw'
    ,'$desa','$penggunaan_tanah','$total_luas_tanah','$ukuran_panjang','$ukuran_lebar','$tahun_penguasaan','$cara_peroleh_tanah','$latitud1','$latitud2','$latitud3'
    ,'$latitud4','$longitud1','$longitud2','$longitud3','$longitud4','$kordinat','$batas_utara','$batas_timur','$batas_barat','$batas_barat'
    ,'$tgl_sekarang','$no_ref')");
  }
  header("location:../page/skpt.php?pesan=berhasil");
  ?>
