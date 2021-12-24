<?php 
include 'koneksi.php';
$tipe_file=$_FILES['dokumen']['type'];
if($tipe_file =="application/pdf"){
  $nama_pemohon  = trim ($_POST['nama_pemohon']);
  $nik = trim($_POST['nik']);
  $tempat_lahir  = trim($_POST['tempat_lahir']);
  $tangal_lahir  = trim($_POST['tangal_lahir']);
  $alamat_pemohon  = trim($_POST['alamat_pemohon']);
  $pekerjaan  = trim($_POST['pekerjaan']);
  $alamat_lokasi = trim($_POST['alamat_lokasi']);
  $rt_rw = trim($_POST['rt_rw']);
  $desa= trim($_POST['desa']);
  $penggunaan_tanah = trim($_POST['penggunaan_tanah']);
  $total_luas_tanah = trim($_POST['total_luas_tanah']);
  $ukuran_panjang = trim($_POST['ukuran_panjang']);
  $ukuran_lebar = trim($_POST['ukuran_lebar']);
  $tahun_penguasaan= trim($_POST['tahun_penguasaan']);
  $cara_peroleh_tanah= trim($_POST['cara_peroleh_tanah']);
  $latitud1 = trim($_POST['latitud1']);
  $latitud2 = trim($_POST['latitud2']);
  $latitud3 = trim($_POST['latitud3']);
  $latitud4 = trim($_POST['latitud4']);
  $longitud1= trim($_POST['longitud1']);
  $longitud2= trim($_POST['longitud2']);
  $longitud3= trim($_POST['longitud3']);
  $longitud4= trim($_POST['longitud4']);
  $kordinat= trim($_POST['kordinat']);
  $batas_utara = trim($_POST['batas_utara']);
  $batas_timur= trim($_POST['batas_timur']);
  $batas_barat= trim($_POST['batas_barat']);
  $batas_selatan= trim($_POST['batas_selatan']);
  $tgl_sekarang= trim($_POST['tgl_sekarang']);
  $no_reff= trim($_POST['no_reff']);



  $dokumen = trim($_FILES['dokumen']['name']);
  
  $sql = "INSERT INTO skpt (nama_pemohon,nik,tempat_lahir,tangal_lahir,alamat_pemohon,pekerjaan,dokumen,alamat_lokasi,rt_rw,desa,penggunaan_tanah,total_luas_tanah,ukuran_panjang,ukuran_lebar,tahun_penguasaan,cara_peroleh_tanah,latitud1,latitud2,latitud3,latitud4,longitud1,longitud2,longitud3,longitud4,kordinat,batas_utara,batas_timur,batas_selatan,batas_barat,no_reff,tgl_sekarang) 
  values('$nama_pemohon','$nik','$tempat_lahir','$tangal_lahir','$alamat_pemohon','$pekerjaan','$dokumen','$alamat_lokasi','$rt_rw'
    ,'$desa','$penggunaan_tanah','$total_luas_tanah','$ukuran_panjang','$ukuran_lebar','$tahun_penguasaan','$cara_peroleh_tanah','$latitud1','$latitud2','$latitud3'
    ,'$latitud4','$longitud1','$longitud2','$longitud3','$longitud4','$kordinat','$batas_utara','$batas_timur','$batas_barat','$batas_barat'
    ,'$tgl_sekarang','$no_reff')";
  mysqli_query($koneksi,$sql);

  $query =mysqli_query($koneksi,"SELECT * FROM skpt  order by  id_skpt desc limit 1");
  $data =mysqli_fetch_array($query);

  $generate=date("ymd_his_").rand(1111,9999);
  $nama_baru =$generate.".pdf";
  $file_temp=$_FILES['dokumen']['tmp_name'];
  $folder="../assets/file";
  move_uploaded_file($file_temp,"$folder/$nama_baru");
  mysqli_query($koneksi,"UPDATE skpt set dokumen='$nama_baru' where id_skpt='$data[id_skpt]'");
  
}
header("location:../pegawai/skpt.php?pesan=berhasil");
  ?>
