<?php
include('../sistem/koneksi.php');
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if ($_SESSION['level'] == "") {
  header("location:../index.php?pesan=belum_login");
}

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
          Welcome <?php echo $_SESSION['level']; ?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
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
                  <a href="profile.php">
                    <span class="sidebar-mini-icon"><i class="fas fa-angle-right"></i></span>
                    <span class="sidebar-normal"> desa</span>
                  </a>
                </li>
              </ul>
          </li>
          <li>
            <a href="SKPT.php">
              <i class="fas fa-file-alt"></i>
              <p>SKPT</p>
            </a>
          </li>
          <li >
            <a href="Profile.php">
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
      <form action="input-skpt.php" method="post" name="data" width="500">
        <div class="form-group">
                <label for="inputName"><b>Id skpt</label>
                <input type="text" name="id_skpt" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>nama pemohon</label>
                <input type="" name="nama_pemohon" class="form-control" required >
            </div>  
            <div class="form-group">
                <label for="inputEmail"><b>nik</label>
                <input type="text" name="nik" class="form-control" required >
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>tempat lahir</label>
                <input type="" name="tempat_lahir" class="form-control" required >
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>tanggal lahir</label>
                <input type="" name="tangal_lahir" class="form-control" required >
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>alamat pemohon</label>
                <input type="" name="alamat_pemohon" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>pekerjaan</label>
                <input type="" name="pekerjaan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>dokumen</label>
                <input type="" name="dokumen" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>alamat lokasi</label>
                <input type="" name="alamat_lokasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>rt_rw</label>
                <input type="" name="rt_rw" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>desa</label>
                <input type="" name="desa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>pengunaan tanah</label>
                <input type="" name="penggunaan_tanah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>total luas tanah</label>
                <input type="" name="total_luas_tanah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>ukuran panjang</label>
                <input type="" name="ukuran_panjang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>ukuran lebar</label>
                <input type="" name="ukuran_lebar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>tahun penguasaan</label>
                <input type="" name="tahun_penguasaan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>cara peroleh tanah</label>
                <input type="" name="cara_peroleh_tanah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>latitud 1</label>
                <input type="" name="latitud1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>latitud 2</label>
                <input type="" name="latitud2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>latitud 3</label>
                <input type="" name="latitud3" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>latitud 4</label>
                <input type="" name="latitud4" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>longitud 1</label>
                <input type="" name="longitud1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>longitud 2</label>
                <input type="" name="longitud2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>longitud 3</label>
                <input type="" name="longitud3" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>longitud 4</label>
                <input type="" name="longitud4" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>kordinat</label>
                <input type="" name="kordinat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>batas utara</label>
                <input type="" name="batas_utara" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>batas timur</label>
                <input type="" name="batas_timur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>batas barat</label>
                <input type="" name="batas_barat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>batas selatan</label>
                <input type="" name="batas_selatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>no ref</label>
                <input type="" name="no_reff" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>tanggal sekarang</label>
                <input type="" name="tgl_sekarang" class="form-control" required>
            </div>
            <div class="modal-footer">
                <a href="" style="color: #000000"><button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
            </div>
        </form>
            
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