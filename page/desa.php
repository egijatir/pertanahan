<?php 
include('../sistem/koneksi.php');
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
	header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Pertanahan
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
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
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a data-toggle="collapse" href="#masterdata">
              <i class="nc-icon nc-map-big"></i>
              <p>Master Data <b class="caret"></b></p>
            </a>
            <div class="collapse " id="masterdata">
              <ul class="nav">
                <li class="active ">
                  <a href="../examples/pages/timeline.html">
                    <span class="sidebar-mini-icon"><i class="nc-icon nc-minimal-right"></i></span>
                    <span class="sidebar-normal"> Desa </span>
                  </a>
                </li>
              </ul>
          </li>
          <li>
            <a href="./SKPT.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>SKPT</p>
            </a>
          </li>
          <li>
            <a href="./Profile.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="../sistem/logout.php">
              <i class="nc-icon nc-button-play"></i>
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
            <a class="navbar-brand" href="javascript:;">SKPT </a>
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
      <br><br>
      <section class="content">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <a href="http://151.106.125.164/kelurahan/create" class="btn btn-primary">
                    <i class="fas fa-user-plus    "></i>
                    Tambah Data
                  </a>
                  <div class="">
                    <a href="" class="btn btn-default btn-flat " data-toggle="modal" data-target="#importModal" title="Import File">
                      <i class="fas fa-file-import    "></i>
                    </a>
                    <a href="http://151.106.125.164/produk/pdf" target="blank" class="btn btn-default btn-flat" title="Cetak PDF">
                      <i class="fas fa-file-pdf    "></i>
                    </a>
                    <a href="http://151.106.125.164/produk/export" class="btn btn-default btn-flat" title="Export Excel">
                      <i class="fas fa-file-excel    "></i>
                    </a>
                  </div>
                </div>
              </div>
              <?php
                
                    $sql2   = "select * from desa order by id_desa desc";

                  // ini but tmpilkn dt
                  $q2     = mysqli_query($koneksi, $sql2);
                  $urut   = 1;
                  while ($r2 = mysqli_fetch_array($q2)) {
                    $id_desa         = $r2['id_desa'];
                    $nama_desa    = $r2['nama_desa'];
                    $kode_desa            = $r2['kode_desa'];
                    $kecamatan          = $r2['kecamatan'];
                  ?>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-head-fixed text-nowrap table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th>#</th>
                          <th>No</th>
                          <th>Kode Desa/Kelurahan</th>
                          <th>Nama Desa/Kelurahan</th>
                          <th>Kecamatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width: 20px">
                            <div class="btn-group">
                              <button type="button" class="btn" data-toggle="dropdown">
                                <i class="fas fa-ellipsis-v    "></i>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a class="dropdown-item" href="http://151.106.125.164/kecamatan/6402012001/edit">
                                    <i class="fas fa-edit    "></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#" onclick="handleDelete (6402012001)">
                                    <i class="fas fa-trash    "></i>
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>

                          </td>
                          <td style="width: 50px" class="text-center"><?php echo $urut++ ?></td>
                          <td style="width: 50px" class="text-center"><?php echo $kode_desa ?></td>
                          <td style="width: 50px" class="text-center"><?php echo $nama_desa?></td>
                          <td style="width: 50px" class="text-center"><?php echo $kecamatan?></td>
                        </tr>
                      </tbody>
                    <?php } ?>
                    </table>
                    <footer class="footer footer-black  footer-white ">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="credits ml-auto">

                          </div>
                        </div>
                      </div>
                    </footer>
                  </div>
                </div>
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