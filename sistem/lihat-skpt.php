<?php
include('../sistem/koneksi.php');
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if ($_SESSION['level'] == "") {
  header("location:../index.php?pesan=belum_login");
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/pavi.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Pertanahan
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" href="/path/to/dropify.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <script src="https://kit.fontawesome.com/2a985d6dcf.js" crossorigin="anonymous"></script>
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 5000);
  </script>

  <style type="text/css">
    .upper {
      text-transform: uppercase;
    }

    .lower {
      text-transform: lowercase;
    }

    .cap {
      text-transform: capitalize;
    }

    .button {
      background-color: Transparent;
      background-repeat: no-repeat;
      border: none;
      cursor: pointer;
      overflow: hidden;
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Welcome <?php echo $username?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="../page/dashboard.php">
              <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#masterdata">
              <i class="fas fa-folder"></i>
              <p>Master Data <b class="caret"></b></p>
            </a>
            <div class="collapse " id="masterdata">
              <ul class="nav">
                <li>
                  <a href="../page/profile.php">
                    <span class="sidebar-mini-icon"><i class="fas fa-angle-right"></i></span>
                    <span class="sidebar-normal"> desa</span>
                  </a>
                </li>
              </ul>
          </li>
          <li>
            <a href="../page/SKPT.php">
              <i class="fas fa-file-alt"></i>
              <p>SKPT</p>
            </a>
          </li>
          <li >
            <a href="../page/Profile.php">
              <i class="fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="../sistem/logout.php">
              <i class="fas fa-sign-out-alt"></i>
              <p>LogOut</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="../page/SKPT.php"><i class="fas fa-arrow-left text-danger"></i></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </nav> 
      <section class="content">
      <div class="card">
     <?php  $id_skpt  = $_GET['id_skpt'];
        $data   = "SELECT * from skpt where id_skpt='$id_skpt'";
        $data1  = mysqli_query($koneksi, $data);
            $data2  = mysqli_fetch_array($data1);?>
      <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> © 2021 ESKPT DINAS PERTANAHAN DAN PENATAAN RUANG @ KUTAI KARTANEGARA
                    <small class="float-right">22-12-2021</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                  <address>
                    <strong>Admin,</strong><br>
                    Jalan Muso Bin Salim No. 06<br>
                    Tenggarong 75512<br>
                    Telp : (+62.541) 661122<br>
                    Fax : (+62.541) 664881<br>
                    WA Center Pengaduan Gangguan Aplikasi<br>
                    +6281254426780<br>
                    Email: dppr@mail.kukarkab.go.id
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-5 invoice-col">

                  <b>Nomor SKPT : 02/16/2007/5147718577690243</b><br>
                  <br>
                  <b>Nomor REF : <?php echo $data2['no_reff']; ?></b><br>
                  <b>Penerbit :</b> TENGGARONG SEBERANG<br>
                  <b>Dibuat :</b> belum di edit<br>
                  <b>Diperbaharui :</b> belum di edit<br>
                </div>
                <!-- /.col -->
              </div>

            <div class="card">
              <h5 class="card-header">08-12-2021</h5>
              <table>
                  <tbody><tr>
                    <th>DATA PEMOHON</th>
                    <td><br></td>
                    <td><br></td>
                  </tr>
                  <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td><?php echo $data2['nik']; ?></td>
                  </tr>
                  <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?php echo $data2['nama_pemohon']; ?></td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td><?php echo $data2['alamat_pemohon']; ?></td>
                  </tr>
                  <tr>
                    <th><br></th>
                    <td><br></td>
                    <td><br></td>
                  </tr>
                  <tr>
                    <th>DATA TANAH</th>
                    <td><br></td>
                    <td><br></td>
                  </tr>
                  <tr>
                    <th>Jalan/Gang/Blok</th>
                    <td>:</td>
                    <td><?php echo $data2['alamat_pemohon']; ?></td>
                  </tr>
                  <tr>
                    <th>RT/ RW/ Dusun</th>
                    <td>:</td>
                    <td><?php echo $data2['rt_rw']; ?></td>
                  </tr>
                  <tr>
                    <th>Kelurahan/ Desa</th>
                    <td>:</td>
                    <td><?php echo $data2['desa']; ?></td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>:</td>
                    <td>TENGGARONG SEBERANG</td>
                  </tr>
                  <tr>
                    <th>Kabupaten</th>
                    <td>:</td>
                    <td>KUTAI KARTANEGARA</td>
                  </tr>
                    <tr><th>Ukuran</th>
                    <td>:</td>
                    <td><?php echo $data2['ukuran_panjang']; ?> M (P) × <?php echo $data2['ukuran_lebar']; ?> M (L) luas: <?php echo $data2['total_luas_tanah']; ?> M<sup>2</sup></td>
                  </tr>
                  
                    <tr><th>Luas</th>
                    <td>:</td>
                    <td><?php echo $data2['total_luas_tanah']; ?> M<sup>2</sup></td>
                  </tr>
                  
                    <tr><th>Penggunaan</th>
                    <td>:</td>
                    <td><?php echo $data2['penggunaan_tanah']; ?></td>
                  </tr>
                  
                    <tr><th>Tahun Awal Penguasaan</th>
                    <td>:</td>
                    <td><?php echo $data2['tahun_penguasaan']; ?></td>
                  </tr>
                  
                    <tr><th>Cara Perolehan</th>
                    <td>:</td>
                    <td><?php echo $data2['cara_peroleh_tanah']; ?></td>
                  </tr>
                  <tr>
                    <th><br></th>
                    <td><br></td>
                    <td><br></td>
                  </tr>
                    <tr><th>BATAS</th>
                    <td><br></td>
                    <td><br></td>
                  </tr>
                  <tr>
                    <th>Utara</th>
                    <td>:</td>
                    <td><?php echo $data2['batas_utara']; ?></td>
                  </tr>
                  <tr>
                    <th>Timur</th>
                    <td>:</td>
                    <td><?php echo $data2['batas_timur']; ?></td>
                  </tr>
                  <tr>
                    <th>Selatan</th>
                    <td>:</td>
                    <td><?php echo $data2['batas_selatan']; ?></td>
                  </tr>
                  <tr>
                    <th>Barat</th>
                    <td>:</td>
                    <td><?php echo $data2['batas_barat']; ?></td>
                  </tr>
                  <tr>
                    <th>Koordinat <br><br><br><br><br></th>
                    <td>:<br><br><br><br><br></td>
                    <td>
                      1. <?php echo $data2['latitud1']; ?><br>
                      2. <?php echo $data2['longitud1']; ?><br>
                      3. <?php echo $data2['latitud2']; ?><br>
                      4. <?php echo $data2['longitud2']; ?><br>
                      <br>
                    </td>
                  </tr>
                </tbody></table>
            </div>

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a class="btn btn-warning " href="../page/SKPT.php">Kembali</a>
                  <a href="http://151.106.125.164/skpt/print/140" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-download"></i> Generate PDF</a>
                </div>
              </div>
            </div>
      </section>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <script>
                document.write(new Date().getFullYear())
              </script> by UMKT
            </div>
          </div>
        </div>
      </footer>
      <script src="../assets/js/core/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <script src="../assets/js/plugins/bootstrap-notify.js"></script>
      <script src="../assets/demo/demo.js"></script>
      <script>
        $(document).ready(function() {
          demo.initChartsPages();
        });
      </script>
</body>

</html>