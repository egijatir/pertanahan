
<?php 
// berfungsi mengaktifkan session
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
//Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   session_start();
   include "koneksi.php";
   $username = input($_POST["username"]);
   $p = input(md5($_POST["password"]));

   $sql = "select * from user where username='".$username."' and password='".$p."' limit 1";
   $hasil = mysqli_query ($koneksi,$sql);
   $jumlah = mysqli_num_rows($hasil);

   if ($jumlah>0) {
	   $row = mysqli_fetch_assoc($hasil);
	   $_SESSION["id_user"]=$row["id_user"];
	   $_SESSION["nama"]=$row["nama"];
	   $_SESSION["email"]=$row["email"];
	   $_SESSION["nip_pejabat"]=$row["nip_pejabat"];
	   $_SESSION["pangkat"]=$row["pangkat"];
	   $_SESSION["username"]=$row["username"];
	   $_SESSION["alamat"]=$row["alamat"];
	   $_SESSION["foto"]=$row["foto"];
	   $_SESSION["level"]=$row["level"];
	   if ($_SESSION["level"]=$row["level"]=='admin')
	   {
		   header("Location:../page/dashboard.php?pesan=berhasil");
	   } else if ($_SESSION["level"]=$row["level"]=='pegawai')
	   {
		   header("Location:../pegawai/dashboard.php?pesan=berhasil");
	   }
   }else {
	header("location:../index.php?pesan=gagal");
   }

}

?>