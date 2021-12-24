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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- CSS Files --><script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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
                  <a href="../page/desa.php">
                    <span class="sidebar-mini-icon"><i class="fas fa-angle-right"></i></span>
                    <span class="sidebar-normal"> Desa </span>
                  </a>
                </li>
              </ul>
          </li>
          <li >
            <a href="../page/SKPT.php">
              <i class="fas fa-file-alt"></i>
              <p>SKPT</p>
            </a>
          </li>
          <li>
            <a href="../page/Profile.php">
              <i class="fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="" data-toggle="modal" data-target="#modalForm2">
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
        <div class="container-fluid">
          <div class="row">
  
            <div class="col-md-6">
              <div class="card ">
                <div class="card-header text-black">
                  <div class="card-header">
                    <h3 class="card-title " >Data Pemohon</h3>
                  </div>
                  <form action="input-skpt.php" method="post" name="data" width="500" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label for="inputMessage"><b>Nama Pemohon</label>
                      <input type="" name="nama_pemohon" class="form-control" required autofocus placeholder="Nama Pemohon">
                    </div>
                    <div class="form-group">
                      <label for="inputEmail"><b>NIK</label>
                      <input type="text" name="nik" class="form-control" required placeholder="Nomor Induk Kependudukan"> 
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Tempat Lahir</label>
                      <input type="" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Tanggal Lahir</label>
                      <input type="date" name="tangal_lahir" class="form-control" required placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Alamat Pemohon</label>
                      <input type="" name="alamat_pemohon" class="form-control" required placeholder="Alamat Pemohon">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Pekerjaan</label>
                      <input type="" name="pekerjaan" class="form-control" required placeholder="Pekerjaan"> 
                    </div><br>
                    <div class="form">
                      <label for="inputMessage"><b>Dokumen</label>
                      <input type="file" name="dokumen" required>
                    </div>  <br> 
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Alamat Objek Tanah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputMessage"><b>Alamat lokasi</label>
                      <input type="" name="alamat_lokasi" class="form-control" required placeholder="Alamat lokasi">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>RT/RW</label>
                      <input type="" name="rt_rw" class="form-control" required placeholder="RT/RW">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Desa/Kelurahan</label>
                      <input type="" name="desa" class="form-control" required placeholder="Desa/Kelurahan">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Pengunaan Tanah</label>
                      <input type="" name="penggunaan_tanah" class="form-control" required placeholder="Pengunaan Tanah">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alamat Objek Tanah</h3>
              </div>
              <div class="card-body">
              <div class="form-group">
                  <label for="inputMessage"><b>Ukuran Lebar (M<sup>2</sup>)</label>
                  <input type="" name="ukuran_lebar" class="form-control" required placeholder="Lebar Tanah (Meter Persegi)"> 
                </div>
                <div class="form-group">
                  <label for="inputMessage"><b>Ukuran Panjang Tanah (M<sup>2</sup>)</label>
                  <input type="" name="ukuran_panjang" class="form-control" required placeholder="Panjang Tanah (Meter Persegi)">
                </div>
                <div class="form-group">
                  <label for="inputMessage"><b>Total Luas Tanah (M<sup>2</sup>)</label>
                  <input type="" name="total_luas_tanah" class="form-control" required placeholder="Total Luas Tanah (Meter Persegi)">
                </div>
               
              </div>
            </div>

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Riwayat Penguasaan Tanah</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-10">
                    <div class="form-group">
                      <label for="inputMessage"><b>Tahun penguasaan</label>
                      <input type="years" name="tahun_penguasaan" class="form-control" required placeholder="Tahun penguasaan">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Cara Perolehan Tanah</label>
                      <input type="" name="cara_peroleh_tanah" class="form-control" required placeholder="Cara Perolehan Tanah">
                    </div><br>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Koordinat Dan Batas Tanah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                      <div class="row">
                        <div class="col-sm-5">
                    <div class="form-group">
                      <label for="inputMessage"><b>Latitud 1</label>
                      <input type="" name="latitud1" class="form-control" required autofocus placeholder="Lat P 1">
                    </div></div>
                    <div class="col-sm-10">
                    <div class="form-group">
                    <label for="inputMessage"><b>Longitud 1</label>
                      <input type="" name="longitud1" class="form-control" required placeholder="Long P 1">
                     
                    </div></div></div>
                    <div class="row">
                    <div class="col-sm-5">
                    <div class="form-group">
                    <label for="inputMessage"><b>Latitud 2</label>
                      <input type="" name="latitud2" class="form-control" required autofocus placeholder="Lat P 2">
                    </div></div>
                    <div class="col-sm-10">
                    <div class="form-group">
                    <label for="inputMessage"><b>Longitud 2</label>
                      <input type="" name="longitud2" class="form-control" required placeholder="Long P 2">
                     
                      </div></div></div>
                    <div class="row">
                    <div class="col-sm-5">
                    <div class="form-group">
                    <label for="inputMessage"><b>Latitud 3</label>
                      <input type="" name="latitud3" class="form-control" required autofocus placeholder="Lat P 3">
                    </div></div>  
                    <div class="col-sm-10">
                    <div class="form-group">
                    <label for="inputMessage"><b>Longitud 3</label>
                      <input type="" name="longitud3" class="form-control" required placeholder="Long P 3">
                    
                    </div></div></div>
                    <div class="row">
                    <div class="col-sm-5">
                    <div class="form-group">
                    <label for="inputMessage"><b>Latitud 4</label>
                      <input type="" name="latitud4" class="form-control" required placeholder="Lat P 4">
                      </div></div>
                    <div class="col-sm-10">
                    <div class="form-group">
                      <label for="inputMessage"><b>Longitud 4</label>
                      <input type="" name="longitud4" class="form-control" required placeholder="Long P 4">
                    </div></div></div>
                    <div class="form-group">
                    <label for="koordinat">Koordinat Lebih dari 4 Titik</label>
                    <p align="justify">Isikan Koordinat pada form berikut dengan  contoh format<br> pengisian memberikan tanda koma (,) sebagai pemisah <br>setiapitik koordinat contoh 
                            <br>(-0.866753 116.686455, -0.859819 116.708942, <br>-0.851475 116.722675, -0.841611 116.720615,<br> -0.834023 116.708427, -0.840744 116.689373,<br> -0.858735 116.673923, -0.866753 116.686455)<br>
                            <br>
                            Aplikasi hanya menerima Sistem proyeksi geografis <br>Desimal Derajat (DD) dan Universal Transver Mercator (UTM) <br>sebagai standard data pengisian.
                          </p>
                      <textarea type="" name="kordinat" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Batas utara</label>
                      <input type="" name="batas_utara" class="form-control" required placeholder="Batas Utara">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Batas Timur</label>
                      <input type="" name="batas_timur" class="form-control" required placeholder="Batas Timur">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Batas Barat</label>
                      <input type="" name="batas_barat" class="form-control" required placeholder="Batas Barat">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage"><b>Batas Selatan</label>
                      <input type="" name="batas_selatan" class="form-control" required placeholder="Batas Selatan">
                    </div>
                    <input type="hidden" name="tgl_sekarang" value="<?php echo date("d-m-Y"); ?>">
                    <div class="modal-footer">
                      <a href="../page/SKPT.php" style="color: #000000"><button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
                    </div>
                    </form>
                    <div class="modal fade" id="modalForm2" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Yakin Ingin logout ?</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
              </div> 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a href="../sistem/logout.php"><input name="upload" type="submit" value="Logout" class="btn btn-danger"></a>
                  </div>
              </div>
            </div>
          </div>
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